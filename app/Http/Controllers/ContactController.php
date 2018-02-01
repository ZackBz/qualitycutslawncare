<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Session;

class ContactController extends Controller
{
    public function Submit(Request $r){
      $data = $r->all();
      $this->validate($r, [
        "name" => "required",
        "phone" => ["required", "regex:/^\d{3}[- ]?\d{3}[- ]?\d{4}$/"],
        "address" => "required",
        "property" => "required",
        "message" => "required"
      ]);
      Mail::to(env('CONTACT_EMAIL'))->send(new Contact($data));
      Session::flash('Success','Success! Your message has been sent.');
      return back();
    }

    public function ShowView(){
      return view('contact');
    }
}
