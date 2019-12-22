<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Trailts\UploadTrait;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    use UploadTrait;
    
    public function list(){
        $blogs = Blog::latest()->paginate(5);
        // dd($blogs[1]);
        return view('pages.story')->with('blogs',$blogs);
        //return view('home.land')->with('users',$users);
    }
    public function create(){
        return view('admin.blog.create');
    }
    public function store(Request $request){
        $reqData = $request->all();
        $blog = new Blog();
       // dd($blog);
        $blog->title = $reqData['title'];
        $blog->description = $reqData['description'];
        $blog->user_id = 5;
       // dd($reqData);
        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
           
            // Make a image name based on user name and current timestamp
            $name = 'profile_image'.'_'.time();
           // dd($image);
            // Define folder path
            $folder = 'img/blog/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            if(!($blog->thum_link == 'demo.jpg')){
                @unlink($blog->thum_link);
            }
            $blog->thum_link = $filePath;
        }
        $blog->save();
        return redirect(route('home'));
    }
}
