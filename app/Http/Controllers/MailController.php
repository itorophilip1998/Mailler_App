<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function sendmail(Request $request)
    {
       $this->validate($request,[
            'subject'=>'required|string|min:5',
            'address'=>'required|email',
            'email'=>'required|string|min:5'
       ]);

       $subject=$request->subject;
       $address=$request->address;
       $email=$request->email;
       Mail::to($address)->send(new sendmail($subject, $email));
       return back();
    }
}
