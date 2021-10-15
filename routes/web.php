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
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show']);

Route::get('/myaccount', [App\Http\Controllers\UserController::class, 'show']);
Route::delete('/myaccount', [App\Http\Controllers\UserController::class, 'delete']);

Route::post('/ajaxuserupdate', [App\Http\Controllers\UserController::class, 'ajaxupdate'])->name('ajaxuserupdate');

Route::post('/address', [App\Http\Controllers\AddressController::class, 'ajaxcreate'])->name('ajaxaddress');
Route::post('/address', [App\Http\Controllers\AddressController::class, 'ajaxupdate'])->name('ajaxaddressupdate');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('test',  [App\Http\Controllers\TestController::class, 'index']);

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index']);







