<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product ;
use App\Category ;
// to store image
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
         public function __construct()
  {
    $this->middleware('auth')->except(['index']);
  }

    public function index()
    {


        
//          $products = Product::paginate(1);
//    return view('pages.web_pages.products' , compact('products'));
        

// $products = DB::table('products')->skip(1)->take(1)->get();
//    return $products ;  

                //   اخر سطر 
//    $users = DB::table('users')
//    ->whereExists(function ($query) {
//        $query->select(DB::raw(1))
//              ->from('orders')
//              ->whereColumn('orders.user_id', 'users.id');
//    })
//    ->get();
// The query above will produce the following SQL:

// select * from users
// where exists (
// select 1
// from orders
// where orders.user_id = users.id
// )


   
// search by first letter:
//    $products = DB::table('products')
//    ->where('name', 'like', 'اول حرف%')
//    ->get();
//    return $products;
//    
//    $products = DB::table('products')
//    ->where('name', 'like', 'a%')
//    ->get();
//    return $products; 



        // m4 3arf afhmha
        // $users = DB::table('users')
        // ->join('product_user', 'users.id', '=', 'product_user.user_id'
        
        // by4t8lo b orders m4 b product_user f naming
        // // ->join('orders', 'users.id', '=', 'orders.user_id')

        // ->select('users.*', 'product_user.amount')
        // ->get();

   
         
    //        $products = DB::table('products')
    //        ->select('name','price')
    //        ->get();
    //    return $products;

        //     trteb b el price : search
           //$price = DB::table('orders')->max('price');

        // $products = DB::table('products')->where('category_id','1')->first();
        // return $products->name;

        //$products = DB::table('products')->get();

        // one to many : test 
        // $product = Product::find(1);
        // return $product->category->name;



    }
    
    // public function validateRequest()
    // {
    // 	return(request()->validate([
    //     'name' =>'required',
    //     'price' =>'required',
    //     'image' =>'required |image',
    //     'serial_number' =>'required',
    //     'stock' =>'required',
    //     'category' =>'required',
    //     'description' =>'required',
    // 	]));
    // }

    // public function storeImage()
    // {
    // 	return request()->file('image')->store('/products' ,'public');
    // }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin_pages.create_products' ,compact('categories'));
    }

   
    public function store(Request $request)
    {
                  
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->file('image')->store('/product','public');        
        $product->serial_number = $request->serial_number;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();
    
        return back();
    }

    public function show(Product $product)
    {
       return view('pages.web_pages.show_product' ,compact('product'));
    }

   
}
