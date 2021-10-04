<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('about/index',[  
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products() 
        ]);
    }
}