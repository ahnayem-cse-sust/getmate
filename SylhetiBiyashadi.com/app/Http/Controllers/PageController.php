<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function story(){
        return view('pages.story');
    }

    public function aboutUs(){
        return view('pages.about_us');
    }

    public function contactUs(){
        return view('pages.contact_us');
    }
}
