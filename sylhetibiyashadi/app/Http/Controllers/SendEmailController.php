<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class SendEmailController extends Controller
{
    // function send(Request $request){
    //     $this->validate($request,[
    //         'name' => 'required',
    //         'email' => 'required',
    //         'message' => 'required'
    //         ]);
    // }
    function send()
    {
        
        $data= request();
       Mail::to('sylhetibiyashadi@gmail.com')->send(new ContactFormMail($data));
       return redirect('/contact');
    }
     
}
