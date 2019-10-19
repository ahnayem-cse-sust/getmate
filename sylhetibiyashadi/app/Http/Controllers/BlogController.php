<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){

        $blogs = Blog::all();
        // dd($blogs[1]);
        return view('home.land')->with('blogs',$blogs);
        //return view('home.land')->with('users',$users);

    }
}
