<?php

namespace App\Http\Controllers;

use App\Upazila;
use Illuminate\Http\Request;

class UpazilaController extends Controller
{
    public function __construct()
    {
        ;
    }
    public function index()
    {
        $upazilas = Upazila::all();
        return view('location.upazila')->with('upazilas',$upazilas);
    }

    public function store(Request $request)
    {
        $reqData = $request->all();
        $upazila = new Upazila();
        $upazila->name = $reqData['name'];
        $upazila->save();
        return redirect(route('upazila'));
    }

    public function delete($id)
    {
        Upazila::destroy($id);
        return back();
    }

}
