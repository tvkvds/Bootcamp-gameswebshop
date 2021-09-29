<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use Session;
use Auth;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\User;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::id())
        {
           $user =  User::with('addresses')->find(Auth::id());
        } 

        /*
        TODO
        retrieve product in cart from the database
        */
        Session::forget('cart');

        $items = ['1' => '4', '2' => '3'];

        

        $moreItems = [ '1' => '0', '2' => '5', '6' => 1];

       
       Cart::cart($items);
       dd(Cart::cart($moreItems));
        
        
        
        return view('checkout/index',[
            'payment_methods' => PaymentMethod::all(),
            'shipping_methods' => ShippingMethod::all(),
            'user' => $user,
            
        ]);
    }
}

