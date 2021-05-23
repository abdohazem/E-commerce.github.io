<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{

  //    public function __construct()
  // {
  //   $this->middleware('auth')->except(['create']);
  // }

  public function __construct()
  {
      $this->middleware('auth');
  }


  
    public function create()
    {
    	
    	return view('contact.create');
    }

    public function store()
    {
    	$data = request()->validate([
         'message' => 'required' ,
    	]);

    	Mail::to('test@test.com')->send(new ContactMail());
    }
}
