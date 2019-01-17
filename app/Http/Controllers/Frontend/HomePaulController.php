<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomePaulController extends Controller
{
    public function introduction(){
        return view('frontend.paul.introduction');
    }

    public function prives()
    {
        return view('frontend.paul.project-prive');
    }
    public function lanes()
    {
        return view('frontend.paul.project-lane');
    }
}
