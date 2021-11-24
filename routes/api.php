<?php

use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//  ** Register User **

Route::post('/register',[AuthController::class,'register']);

// Login User
Route::post('/login',[AuthController::class,'login']);

// ** Display All Products **
Route::get('/products', [ProductController::class,'index']);

// Route::get('/products', function() {
//     // return Product::all();
//     return DB::table('products')
//             ->orderBy('id', 'DESC')
//             ->get();
    
// });



// Route::post('/products', function(Request $request) {
//      Product::create(
//         [
//             'name' => $request->name, 
//             'slug' => $request->slug, 
//             'price' => $request->price
//         ]
//     );
//     return "Created Successfully";
// });


// ** Display Product **
Route::get('/product/{id}',[ProductController::class,'show']);

// ** Search Products **
Route::get('product/search/{name}',[ProductController::class, 'search']);



// ** Protected Routes **

Route::group(['middleware' => ['auth:sanctum']], function() {

// ** Store Product **
Route::post('/products',[ProductController::class,'store']);

// ** Update Product **
Route::post('/product/{id}',[ProductController::class,'update']);

// ** Delete Product **
Route::get('product/delete/{id}',[ProductController::class, 'destroy']);

// Logout User
Route::post('/logout',[AuthController::class,'logout']);




});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
