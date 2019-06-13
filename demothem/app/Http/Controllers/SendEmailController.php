<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendmail(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'message' => 'required'
        ]);
        $name= $request->name;
        $email= $request->email;
        $message= $request->message;
        Mail::to($email)->send(new SendMail($name,$message));
        return redirect("/index");
    }
}
