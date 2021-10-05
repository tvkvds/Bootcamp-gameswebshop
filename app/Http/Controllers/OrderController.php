<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\Product;
use App\Models\Cart;

class OrderController extends Controller
{
    public function create(Request $request)
    {
    
        return view('order/create',[
            
            'payment_methods' => PaymentMethod::all(),
            'shipping_methods' => ShippingMethod::all(),
            'products' => Product::inRandomOrder()->with(['images'])->get(),
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products(),
            'cart_total' => Cart::cost(),
            'cart_amount' => Cart::amount(),
            'cart_vat' => Cart::vat()
            
        ]);
    }

    public function store(Request $request)
    {
        return view('order/store',[
            
            'payment_methods' => PaymentMethod::all(),
            'shipping_methods' => ShippingMethod::all(),
            'products' => Product::inRandomOrder()->with(['images'])->get(),
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products(),
            'cart_total' => Cart::cost(),
            'cart_amount' => Cart::amount(),
            'cart_vat' => Cart::vat()
            
        ]);
    }
}
