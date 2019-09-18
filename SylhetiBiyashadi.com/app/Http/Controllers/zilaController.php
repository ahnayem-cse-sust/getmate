<?php

namespace App\Http\Controllers;

use App\Zila;
use Illuminate\Http\Request;

class zilaController extends Controller
{
    public function __construct()
    {
        ;
    }
    public function index()
    {
        $zilas = Zila::all();
        return view('location.zila')->with('zilas',$zilas);
    }

    public function store(Request $request)
    {
        $reqData = $request->all();
        $zila = new Zila();
        $zila->name = $reqData['name'];
        $zila->save();
        return redirect(route('zila'));
    }

    public function delete($id)
    {
        Zila::destroy($id);
        return back();
    }
}
