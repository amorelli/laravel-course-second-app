<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
  public function show()
  {
    return view('contact');
  }

  public function store()
  {
    // send an email
    request()->validate(['email' => 'required|email']);

    $email = request('email');

    Mail::to(request('email'))->send(new Contact('shirts'));

    return redirect('/contact')->with('message', 'Email sent!');
  }
}
