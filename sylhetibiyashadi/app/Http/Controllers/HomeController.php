<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index($data = null)
    {

        $maximum = UserDetail::max('age');
        //$maximum= 20;
        if($data){
            return view('landing.land')->with('users',$data)->with('maximum',$maximum);
        }
        // $blogs = Blog::all();
       // return view('landing.land',compact('blogs'))->with('blogs',$blogs);
        //  dd($blogs);
        // return view('landing.land')->with('blogs',$blogs);

        $users = User::role('user')->paginate(8);
        return view('landing.land')->with('users',$users)->with('maximum',$maximum);
    }

    public function searchResult($data = null){
        $users = User::role('user')->all();
        return view('landing.land')->with('users',$allusers);
    }

    
    public function search(Request $request){
        $data = $request->all();
        //dd($data);
        $users = User::whereHas('userDetail', function($query) use ($data) {
            if($data['gender']){
                $query->where('gender', $data['gender']);
            }
            if($data['religion']){
                $query->where('religion', $data['religion']);
            }
            //$query->where('gender', $data['gender'])->where('religion', $data['religion'])->whereBetween('age',[$data['agefrom'],$data['ageto']]);
        })->paginate(8);
        // dd($users);
       
        return view('landing.land')->with('users',$users);
    
    }
}
