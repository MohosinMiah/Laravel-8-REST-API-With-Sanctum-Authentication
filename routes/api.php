<?php

use App\Models\Product;
use App\Http\Controllers\ProductController;
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


// ** Display All Products **
Route::get('/products', [ProductController::class,'index']);

// Route::get('/products', function() {
//     // return Product::all();
//     return DB::table('products')
//             ->orderBy('id', 'DESC')
//             ->get();
    
// });


// ** Store Product **
Route::post('/products',[ProductController::class,'store']);
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

// ** Update Product **
Route::post('/product/{id}',[ProductController::class,'update']);

// ** Delete Product **
Route::get('product/delete/{id}',[ProductController::class, 'destroy']);


// ** Search Products **
Route::get('product/search/{name}',[ProductController::class, 'search']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
