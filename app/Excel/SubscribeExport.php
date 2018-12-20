<?php
/**
 * Created by PhpStorm.
 * User: YANSEN
 * Date: 12/20/2018
 * Time: 13:57
 */

namespace App\Excel;

use App\Models\Subscribe;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SubscribeExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('admin.subscribe.download', [
            'subscribes' => Subscribe::all()
        ]);
    }
}