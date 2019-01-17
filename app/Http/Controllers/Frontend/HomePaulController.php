<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomePaulController extends Controller
{
    public function projects()
    {
        return view('frontend.paul.project-prive');
    }
}
