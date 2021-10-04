<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\User;
use App\Models\Cart;
Use App\Models\Product;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
    
        return view('checkout/index',[
            
            'payment_methods' => PaymentMethod::all(),
            'shipping_methods' => ShippingMethod::all(),
            'products' => Product::inRandomOrder()->with(['images'])->get(),
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products(),
            'cart_total' => Cart::cost(),
            'cart_amount' => Cart::amount()
            
        ]);
    }
}

