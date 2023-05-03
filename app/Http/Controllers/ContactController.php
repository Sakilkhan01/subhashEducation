<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\AdminMail;
use Validator;
use Mail;
use PDF;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact-us');
    }

    public function store(Request $request)
    {

      
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'subject'=>'required',
          'message' => 'required'
       ]);

        $user = array(
            'name'         => $request->name,
            'email'        => $request->email,
            'subject'      => $request->subject,
            'phone_number' => $request->phone,
            'message'      => $request->message,
        );

        Mail::to($request->email)->send(new ContactMail($user));

        

        Mail::to(MAIL_ID)->send(new AdminMail($user));

        return back()->with('success', 'Thank you for contact us!');

    }
  
































}
