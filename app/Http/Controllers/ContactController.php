<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function Submit(Request $r){
      $data = $r->all();
      Mail::to('zackbaldwin148@gmail.com')->send(new Contact($data));
      dd($data);
    }

    public function ShowView(){
      return view('contact');
    }
}
