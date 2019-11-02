<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index($data = null)
    {
        $maximum = UserDetail::max('age');
        $users = User::role('user')->paginate(8);

        return view('home.index')->with('users', $users)->with('maximum', $maximum);
    }


    public function search(Request $request)
    {
        $maximum = UserDetail::max('age');
        $data = $request->all();
//        dd($data);
        if (!empty($data['user_id'])) {
            $id = $data['user_id'] - 400950;
            $users = User::where('id', '=', $id)->whereHas('userDetail')->paginate(8);
            $users = $users->appends($data);
            return view('home.index')->with('users', $users)->with('maximum', $maximum)->with('searchData',$data);
        }
        $users = User::whereHas('userDetail', function ($query) use ($data) {
            if (isset($data['gender'])) {
                $query->where('gender', $data['gender']);
            }
            if (isset($data['religion'])) {
                $query->where('religion', $data['religion']);
            }
            if (isset($data['agefrom'])) {
                $query->where('age', '>=', $data['agefrom']);
            }
            if (isset($data['ageto'])) {
                $query->where('age', '<=', $data['ageto']);
            }
        })->paginate(8);

        $users = $users->appends($data);
//        dd($users);
        return view('home.index')->with('users', $users)->with('maximum', $maximum)->with('searchData',$data);

    }
}
