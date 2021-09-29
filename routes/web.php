<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::post('/search', [App\Http\Controllers\SearchController::class, 'index']); 

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index']);

Route::get('product', [App\Http\Controllers\ProductController::class, 'product']);

