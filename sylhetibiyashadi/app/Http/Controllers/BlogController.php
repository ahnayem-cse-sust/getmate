<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function list(){
        $blogs = Blog::all();
        // dd($blogs[1]);
        return view('pages.story')->with('blogs',$blogs);
        //return view('home.land')->with('users',$users);
    }
    public function create(){
        return view('admin.blog.create');
    }
    public function store(Request $request){
        $reqData = $request->all();
        $blog = Blog::all();
        if (empty($blog)){
            $blog = new blog();
        }
        $blog->title = $reqData['title'];
        $blog->save();
        return redirect(route('home'));
    }
}
