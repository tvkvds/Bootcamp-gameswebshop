<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
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
        
        if (!Session::get('cart'))
        {
            return back()->withErrors(['msg' => 'Please add products to your shopping cart before checking out']);
        }
        
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
        $billingAddress->address_1 = $request['address']['address_1'];
        $billingAddress->address_2 = $request['address']['address_2'];
        $billingAddress->city = $request['address']['city'];
        $billingAddress->zipcode = $request['address']['zipcode'];
        $billingAddress->billing_address = 1;

        $billingAddress->save();

        //shipping address

        foreach ($request['address2'] as $attr)
        {
            if (empty($attr))
            {
                $ship = false;
            }
            else 
            {
               $ship = true;
            }
        }
        

        if ($ship === true)
        {
            $shippingAddress = new Address;

            $shippingAddress->user_id = $user->id;
            $shippingAddress->country = $request['address2']['country'];
            $shippingAddress->address_1 = $request['address2']['address_1'];
            $shippingAddress->address_2 = $request['address2']['address_2'];
            $shippingAddress->city = $request['address2']['city'];
            $shippingAddress->zipcode = $request['address2']['zipcode'];
            $shippingAddress->billing_address = 0;

            $shippingAddress->save();
        }

        $shippingMethod = ShippingMethod::find($request['shipping']);
        $paymentMethod = PaymentMethod::where('payment_method', $request['payment'])->pluck('id');

        //make order
        $order = new Order;

        $order->user_id = $user->id;
        $order->shipping_method_id = $shippingMethod->id;
        $order->payment_method_id = $paymentMethod[0];
        $order->shipping_address = $billingAddress->id;
        if (isset($shippingAddress))
        {
            $order->shipping_address = $shippingAddress->id;
        }
        $order->billing_address = $billingAddress->id;
        $order->user_note = $request['userNote'];
        $order->total_price = (Cart::cost() + $shippingMethod->shipping_cost);
        $order->total_vat = Cart::vat();
        $order->status = 'processing';

        $order->save();

        //make order products and adjust product stock & sold

        $products = Cart::products();
        $amounts = Session::get('cart');

        foreach($products as $product)
        {
            $product->orders()->attach($order->id, ['amount' => $amounts[$product->id]]);
            $product->sold += $amounts[$product->id];
            $product->stock -= $amounts[$product->id];
            $product->save();
            
        }
        
        $address = $billingAddress;
        if (isset($shippingAddress))
        {
            $address = $shippingAddress;
        }

        $cart = Session::get('cart');
        Session::forget('cart');

        return view('order/store',[
            
            
            'products' => $products,
            'cart' => $cart,
            'cart_products' => Cart::products(),
            'cart_total' => Cart::cost(),
            'cart_amount' => Cart::amount(),
            'cart_vat' => Cart::vat(),
            'order' => $order,
            'address' => $address,
            'user' => $user,
            'shipping' => $shippingMethod,
            'payment' => $request['payment'],

        ]);
    }
}
