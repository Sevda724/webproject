<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contactForm');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject('World Books');
        });

        \Mail::send('thanks', array(
            'name' => $input['name'],
            'email' => $input['email'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($request->input('email'))->subject('World Books');
        });
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
