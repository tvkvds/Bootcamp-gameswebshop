<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class OrderconfController extends Controller
{
    public function index(Request $request)
    {
        return view('orderconf/index',[  
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products(),
            'cart_total' => Cart::cost(),
            'cart_amount' => Cart::amount()
        ]);
    }
}