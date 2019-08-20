<?php
/**
 * Created by PhpStorm.
 * User: YANSEN
 * Date: 12/10/2018
 * Time: 10:06
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\libs\Utilities;
use App\Models\Category;
use App\Models\Portofolio;
use App\Models\PortofolioImage;
use App\Transformer\PortofolioTransformer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class PortofolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getIndex(Request $request){
        $users = Portofolio::all();
        return DataTables::of($users)
            ->setTransformer(new PortofolioTransformer())
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('admin.portofolio.index');
    }

    public function show(Portofolio $item)
    {
        $images = PortofolioImage::where('portofolio_id', $item->id)->orderby('is_main_image','desc')->get();
        $productCategory = Category::where('portofolio_id', $item->id)->first();

        $data = [
            'product'    => $item,
            'productCategory'    => $productCategory,
            'images'    => $images,
        ];
        return view('admin.portofolio.show')->with($data);
    }

    public function create()
    {
        $product = Portofolio::find(1);
        $categories = Category::all();

        $data = [
            'categories'    => $categories,
            'product'    => $product,
        ];
        return view('admin.portofolio.create')->with($data);
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name'        => 'required',
                'location'             => 'required',
            ]);


            if ($request->input('category') == "-1") {
                return back()->withErrors("Category is required")->withInput($request->all());
            }
//            dd($request);
            $detailImages = $request->file('detail_image');
            $mainImages = $request->file('main_image');

            if($detailImages == null){
                return back()->withErrors("Detail Image required")->withInput($request->all());
            }
            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

            $dateTimeNow = Carbon::now('Asia/Jakarta');

//            dd($colourNew);
            $newPortofolio = Portofolio::create([
                'name' => $request->input('name'),
                'location' => $request->input('location'),
                'category_id' => $request->input('category'),
                'status' => 1,
                'created_at'        => $dateTimeNow->toDateTimeString(),
                'updated_at'        => $dateTimeNow->toDateTimeString(),
            ]);


            // save product main image, thumbnail and image detail
            //main image
            $img = Image::make($mainImages);
            $extStr = $img->mime();
            $ext = explode('/', $extStr, 2);
            $filename = $newPortofolio->id.'_main_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

            if(env('SERVER_HOST_URL') == 'http://localhost:8000/'){
                $img->save(public_path('storage/portofolios/'. $filename), 75);
            }
            else{
                $img->save('../public_html/storage/portofolios/'. $filename, 75);
            }

            $newPortofolioImage = PortofolioImage::create([
                'portofolio_id' => $newPortofolio->id,
                'path' => $filename,
                'is_main_image' => 1,
                'is_thumbnail' => 0,
            ]);


            //image detail
            for($i=0;$i<sizeof($detailImages);$i++){
                $img = Image::make($detailImages[$i]);
                $extStr = $img->mime();
                $ext = explode('/', $extStr, 2);

                $filename = $newPortofolio->id.'_'.$i.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                if(env('SERVER_HOST_URL') == 'http://localhost:8000/'){
                    $img->save(public_path('storage/portofolios/'. $filename), 75);
                }
                else{
                    $img->save('../public_html/storage/portofolios/'. $filename, 75);
                }

                $newPortofolioImage = PortofolioImage::create([
                    'portofolio_id' => $newPortofolio->id,
                    'path' => $filename,
                    'is_main_image' => 0,
                    'is_thumbnail' => 0,
                ]);
            }

            return redirect()->route('admin.portofolio.edit',['item' => $newPortofolio->id]);

        }catch(\Exception $ex){
            error_log($ex);
            Log::error("Admin/PortofolioController error: ". $ex);
            return back()->withErrors("Something Went Wrong")->withInput();
        }
    }

    public function edit(Portofolio $item)
    {
        $categories = Category::all();
        $mainImage = PortofolioImage::where('portofolio_id', $item->id)->where('is_main_image', 1)->first();
        $detailImage = PortofolioImage::where('portofolio_id', $item->id)
            ->where('is_main_image', 0)
            ->where('is_thumbnail', 0)->get();
        $data = [
            'product'    => $item,
            'categories'    => $categories,
            'mainImage'    => $mainImage,
            'detailImage'    => $detailImage,
        ];
        return view('admin.portofolio.edit')->with($data);
    }

    public function update(Request $request){
//        dd($request);
        try{
            $validator = Validator::make($request->all(), [
                'name'        => 'required',
                'sku'         => 'required',
                'category'             => 'required',
                'price'             => 'required',
                'qty'             => 'required',
                'weight'             => 'required',
                'description'             => 'required',
            ]);
            $product = Portofolio::find($request->input('id'));
            if($product->qty > $request->input('qty')){
                $prevQty = $product->qty - $request->input('qty');
                $prevQty = '-' . $prevQty;
            }
            else if($product->qty < $request->input('qty')){
                $prevQty = $request->input('qty') - $product->qty;
            }
            else if($request->input('qty') == 0){
                $prevQty = '-' . $product->qty;
            }
            else{
                $prevQty = 0;
            }

            if ($request->input('category') == "-1") {
                return back()->withErrors("Category is required")->withInput($request->all());
            }
//            dd($request);
            $detailImages = $request->file('detail_image');
            $mainImages = $request->file('main_image');
            $thumbnailImages = $request->file('thumbnail_image');

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

            $dateTimeNow = Carbon::now('Asia/Jakarta');
            $slug = Utilities::CreatePortofolioSlug($request->input('name'));

            $colourNew = Utilities::CreatePortofolioSlug($request->input('colour'));

            if($request->input('is_customize') == 'on'){
                $customize = 1;
            }
            else{
                $customize = 0;
            }
//            dd($slug);
            // update product
            $product->is_customize = $customize;
            $product->category_id = $request->input('category');
            $product->name = $request->input('name');
            $product->slug = $slug."--".$colourNew;
            $product->sku = $request->input('sku');
            $product->description = $request->input('description');
            $product->style_notes = $request->input('style_notes');
            $product->qty = $request->input('qty');
            $product->price = (double) $request->input('price');
            $product->weight = $request->input('weight');
            $product->width = $request->input('width');
            $product->height = $request->input('height');
            $product->length = $request->input('length');
            $product->tag = $request->input('tags');
            $product->updated_at = $dateTimeNow->toDateTimeString();

            $product->save();

//            // update product category
//            $selectedCategory = CategoryPortofolio::where('portofolio_id', $product->id)->first();
//            $selectedCategory->category_id = $request->input('category');
//            $selectedCategory->updated_at = $dateTimeNow->toDateTimeString();
//            $selectedCategory->save();


            // update product main image, thumbnail and image detail

            if(!empty($mainImages)){
                $mainImage = PortofolioImage::where('portofolio_id', $product->id)->where('is_main_image', 1)->first();
//                dd($mainImage);
                if(!empty($mainImage)){

                    $mainImage->delete();

                    $img = Image::make($mainImages);
                    $extStr = $img->mime();
                    $ext = explode('/', $extStr, 2);
                    $filename = $product->id.'_main_'.$slug.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                    if(env('SERVER_HOST_URL') == 'http://localhost:8000/'){
                        $img->save(public_path('storage/portofolios/'. $filename), 75);
                    }
                    else{
                        $img->save('../public_html/storage/portofolios/'. $filename, 75);
                    }

                    $newPortofolioImage = PortofolioImage::create([
                        'portofolio_id' => $product->id,
                        'path' => $filename,
                        'is_main_image' => 1,
                        'is_thumbnail' => 0,
                    ]);
                }
            }
            if(!empty($thumbnailImages)){
                $thumbnailImage = PortofolioImage::where('portofolio_id', $product->id)->where('is_thumbnail', 1)->first();
//                dd($thumbnailImage);
                if(!empty($thumbnailImage)){

                    $thumbnailImage->delete();

                    $img = Image::make($thumbnailImages);
                    $extStr = $img->mime();
                    $ext = explode('/', $extStr, 2);
                    $filename = $product->id.'_thumbnail_'.$slug.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                    if(env('SERVER_HOST_URL') == 'http://localhost:8000/'){
                        $img->save(public_path('storage/portofolios/'. $filename), 75);
                    }
                    else{
                        $img->save('../public_html/storage/portofolios/'. $filename, 75);
                    }

                    $newPortofolioImage = PortofolioImage::create([
                        'portofolio_id' => $product->id,
                        'path' => $filename,
                        'is_main_image' => 0,
                        'is_thumbnail' => 1,
                    ]);
                }
            }
            if(!empty($detailImages)){
//                dd($detailImages);
                $detailImage = PortofolioImage::where('portofolio_id', $product->id)->where('is_main_image', 0)->where('is_thumbnail', 0)->get();

                foreach($detailImage as $image){
                    $image->delete();
                }

                for($i=0;$i<sizeof($detailImages);$i++){
                    $img = Image::make($detailImages[$i]);
                    $extStr = $img->mime();
                    $ext = explode('/', $extStr, 2);

                    $filename = $product->id.'_'.$i.'_'.$slug.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                    if(env('SERVER_HOST_URL') == 'http://localhost:8000/'){
                        $img->save(public_path('storage/portofolios/'. $filename), 75);
                    }
                    else{
                        $img->save('../public_html/storage/portofolios/'. $filename, 75);
                    }

                    $newPortofolioImage = PortofolioImage::create([
                        'portofolio_id' => $product->id,
                        'path' => $filename,
                        'is_main_image' => 0,
                        'is_thumbnail' => 0,
                    ]);
                }
            }


            return redirect()->route('admin.portofolio.show',['item' => $product->id]);

        }catch(\Exception $ex){
//            dd($ex);
            error_log($ex);
            return back()->withErrors("Something Went Wrong")->withInput();
        }
    }

    public function getPortofolios(Request $request){
        $term = trim($request->q);
        $roles = Portofolio::where('id', '!=', $request->id)
            ->where(function ($q) use ($term) {
                $q->where('name', 'LIKE', '%' . $term . '%');
            })
            ->get();

        $formatted_tags = [];

        foreach ($roles as $role) {
            $formatted_tags[] = ['id' => $role->id, 'text' => $role->name];
        }

        return \Response::json($formatted_tags);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        try {
            $product = Portofolio::find($request->id);
            $product->status = 2;
            $product->save();

            Session::flash('success', 'Success Deleting ');
            return Response::json(array('success' => 'VALID'));
        }
        catch(\Exception $ex){
            return Response::json(array('errors' => 'INVALID'));
        }


    }
}