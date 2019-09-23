<?php

namespace App\Http\Controllers;

use App\Http\Trailts\UploadTrait;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
use UploadTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * User list
     * @author Nayem
     */
    public function list()
    {
        $users = User::role('new')->get();
        return view('user.list')->with('users',$users);
    }


    public function listDisplay()
    {
        $user = User::find($id);
    }

    /**
     * User activate
     * @author Nayem
     */
    public function activate($id)
    {
        $user = User::find($id);
        $user->syncRoles('user');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reqData = $request->all();
        $authUser = Auth::user();
        $userDetail = UserDetail::where('user_id',$authUser->id)->first();
        if (empty($userDetail)){
            $userDetail = new UserDetail();
            $userDetail->user_id = $authUser->id;
        }
        $userDetail->religion = $reqData['religion'];
        $userDetail->height = $reqData['height'];
        $userDetail->gender = $reqData['gender'];
        $userDetail->qualification = $reqData['qualification'];
        $userDetail->present_address = $reqData['present_address'];
        $userDetail->permanent_address = $reqData['permanent_address'];
        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = 'profile_image'.'_'.time();
            // Define folder path
            $folder = 'img/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            if(!($userDetail->image == 'demo.jpg')){
                @unlink($userDetail->image);
            }
            $userDetail->image = $filePath;
        }
        $userDetail->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();
        return view('user.edit')
            ->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
