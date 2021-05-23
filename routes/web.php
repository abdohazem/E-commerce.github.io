<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
use Illuminate\Http\Request;

//  Route::get('/adm/{id}' ,function(Request $request){

//     $url = $request->url();
//     return $url;
// });


//many to many test code
//  Route::get('/' ,function(){

//     $user = \App\User::find(1);

//     foreach ($user->products as $product) {
//        echo'ff ';
//     }
// });


                 //admin routes
Route::resource('admins','AdminController');

Route::resource('categories','CategoryController');

                  //web routes
Route::resource('products','ProductController');

Route::resource('shop' , 'ShopController');

Route::resource('Orders' , 'OrderController');

Route::resource('contacts' , 'ContactController');

Route::resource('about-us' , 'AboutUsController');


// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);




// shallow() in docs search :
// use App\Http\Controllers\CommentController;

// Route::resource('photos.comments', CommentController::class)->shallow();



// photocomment ??? 
// use App\Http\Controllers\PhotoCommentController;

// Route::resource('photos.comments', PhotoCommentController::class);
// This route will register a nested resource that may be accessed with URIs like the following:

// /photos/{photo}/comments/{comment}



// a route that will be executed when no other route matches
// the incoming request
//( should always be the last route registered by your application):
// Route::fallback(function () {
//     echo'ffff';
// });

// use App\Product;
// Route::get('/products/{product:price}', function (Product $product) {
//     return $product;
// });

// Optional Parameters:
// Route::get('/user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return $name;
// });