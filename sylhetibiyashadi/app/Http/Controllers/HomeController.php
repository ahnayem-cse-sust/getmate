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
//        dd($request);
        $data = $request->all();
        $users = User::whereHas('userDetail', function ($query) use ($data) {
            if ($data['gender']) {
                $query->where('gender', $data['gender']);
            }
            if ($data['religion']) {
                $query->where('religion', $data['religion']);
            }
            if ($data['agefrom']) {
                $query->where('age', '>=', $data['agefrom']);
            }
            if ($data['ageto']) {
                $query->where('age', '<=', $data['agefrom']);
            }
        })->paginate(8);

        return $this->index($data);

    }
}
