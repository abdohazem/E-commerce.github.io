<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ShopController extends Controller
{
           public function __construct()
  {
    $this->middleware('auth')->except(['index']);
  }

  public function index()
  {
  	$products = Product::paginate(2);
  	return view('pages.web_pages.shop' , compact('products'));
  }
}
