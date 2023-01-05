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

        $messages = [
            'name.required' => 'Please fill the name field.',
            'phone.required' => 'Please fill the phone number field.',
            'phone.numeric' => 'The phone number must be a number.',
            'email.required' => 'Please fill the email field.',
            'message.required' => 'Please fill the message field.',
        ];
  
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ], $messages);
  
        if ($validator->fails()) {
            return redirect('contact-us')->withErrors($validator)->withInput();
        }

        // $contact = new Contact;

        // $contact->name = $request->name;
        // $contact->last_name = $request->last_name;
        // $contact->phone = $request->phone;
        // $contact->business_email = $request->business_email;
        // $contact->company = $request->company;
        // $contact->request_type = $request->subject;
        // $contact->message = $request->description;
        // $fileName = '';
        

        // $contact->save();

        $user = array(
            'name'         => $request->name,
            'email'        => $request->email,
            'subject'      => 'Contact Us',
            'phone_number' => $request->phone,
            'message'      => $request->message,
        );

        Mail::to($request->email)->send(new ContactMail($user));

        $from_email = config('mail.from_email');

        Mail::to($from_email)->send(new AdminMail($user));

        return back()->with('message', 'Thank you for contact us!');

    }
  
































}
