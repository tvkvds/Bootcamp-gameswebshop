<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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




Route::get('/' , [App\Http\Controllers\HomeController::class, 'index']);
  
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/products/{slug}', [App\Http\Controllers\ProductController::class, 'show']);

Route::post('/cart', [App\Http\Controllers\CartController::class, 'update']);
Route::post('/ajaxcart', [App\Http\Controllers\CartController::class, 'ajaxcart'])->name('ajaxcart'); 

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::post('/search', [App\Http\Controllers\SearchController::class, 'index']); 

Route::get('/checkout', [App\Http\Controllers\OrderController::class, 'create']);
Route::post('/orderconfirmed', [App\Http\Controllers\OrderController::class, 'store']);









Route::get('/test', function ()  {
    return view('/test', [
        // 'test' => ''
    ]);
       
});

Route::post('/testing', function () {
    return view('/testing', [
        'test' => request(),
        'cart' => Session::get('cart'),
        'cart_products' => Cart::products(),
        'cart_total' => Cart::cost(),
        'cart_amount' => Cart::amount(),
        'cart_vat' => Cart::vat()
    ]);
});

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('/orderconf', [App\Http\Controllers\OrderconfController::class, 'index']);



