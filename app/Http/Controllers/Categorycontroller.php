<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category ;
use Illuminate\Support\Facades\DB;
use App\Product ;
class Categorycontroller extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth');
    }

public function show(Category $category)
{
    $products = DB::table('products')
    ->where('category_id','=',$category->id)
    ->paginate(1);
    return view('pages.web_pages.category',compact('products'));


    // $products = Product::
    // where('category_id','=',$category->id)
    // ->paginate(1);
    // return view('pages.web_pages.category',compact('products'));


}

    public function create()
    {
    	return view('pages.admin_pages.create_category');
    }
    public function store(Request $request)
    {
    	$category = new Category();
        $category->name = $request->name;
        $category->save();
    	return redirect('admins');
    }
  }
