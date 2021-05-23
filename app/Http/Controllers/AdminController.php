<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin ;

// to store image
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$admins = Admin::all();
    	return view('pages.admin_pages.index',compact('admins'));
    }
    public function create()
    {
    	return view('pages.admin_pages.create_admins_form');
    }

    // public function validateRequest()
    // {
    // 	return(request()->validate([
    //        'name' => 'required | min:3',
    //        'email' => 'required | email ',
    //        'password' => 'required ',
    //        'image' => 'required | image',
    //        'phone' => 'required |max:11',
    //        'address' => 'required',

    // 	]));
    // }

    //  public function storeImage()
    // {
    //   return  request()->file('image')->store('/admin','public');
    // }

// public function store()
// {
//    $admin = Admin::create($this->validateRequest());
//    $this->storeImage('admin');
//    return redirect('admins') ;
// }


    public function store(Request $request)
    {
                  
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->password = $request->password;
        $admin->image = $request->file('image')->store('/admin','public');
        $admin->save();
    
    	return redirect('admins');
    }
   


    public function edit(Admin $admin)
    {
      return view ('pages.admin_pages.admins_edit', compact('admin'));
    }

    public function update(Admin $admin)
    {
      $admin->update($this->validateRequest());
      return redirect('admins');
    }
     public function show(Admin $admin)
    {
      return view('pages.admin_pages.admin_show' , compact('admin'));
    }

    public function destroy(Admin $admin)
    {
      $admin->delete();
      return redirect('admins');
    }
   
}
