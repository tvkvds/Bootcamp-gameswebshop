<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function update()
    {
        //[0-9]{2} regex for basic validation

        Cart::cart(request('product'));
       
        return back()->withInput();
    }
}
