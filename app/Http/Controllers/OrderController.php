<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Str;

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

    //made assuming there is no loggedin user
    public function store(Request $request)
    { 

        //retrieve or make user
        $user = User::firstOrNew(
            ['email' =>  request('email')]
            //['id' => auth/session]
        );

        $user->registered = 0;
        $user->email = $request['user']['email'] . Str::random(10); //Str moet eruit
        $user->first_name = $request['user']['first_name'];
        $user->last_name = $request['user']['last_name'];
        $user->phone = $request['user']['phone'] . Str::random(10); //Str moet eruit
        $user->company = $request['user']['company'];
         
        $user->save();

       //billing address
       $billingAddress = new Address;

       $billingAddress->user_id = $user->id;
       $billingAddress->country = $request['address']['country'];
       $billingAddress->address_1 = $request['address']['address1'];
       $billingAddress->address_2 = $request['address']['address2'];
       $billingAddress->city = $request['address']['city'];
       $billingAddress->zipcode = $request['address']['zipcode'];
       $billingAddress->billing_address = 1;

       $billingAddress->save();


       $empty = count(array_filter($request['address2'])) == 0 ? true : false;

       dd($empty);

        //make shipping address
        if ($request['address2'] ?? null)
        {
            $shippingAddress = new Address;

            $shippingAddress->user_id = $user->id;
            $shippingAddress->country = $request['address2']['country'];
            $shippingAddress->address_1 = $request['address2']['address1'];
            $shippingAddress->address_2 = $request['address2']['address2'];
            $shippingAddress->city = $request['address2']['city'];
            $shippingAddress->zipcode = $request['address2']['zipcode'];
            $shippingAddress->billing_address = 0;

            $shippingAddress->save();
        }
        

        
        return $request['address2'];


        
        
        
        //retrieve shipping method
        //retrieve payment method
        //retrieve products
        $products = Cart::products();
        //setup total vat total price and user note for order
        //make order
        //make order products
        //adjust product stock
        //pass order and order products
        


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
