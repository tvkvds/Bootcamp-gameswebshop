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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Auth::routes();

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search-page');

Auth::routes();

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');