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

class OrderController extends Controller
{
    public function create()
    {
       


        return view('order/create',
        [
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
        
        if (Session::get('user'))
        {
            $user = User::find(Session::get('user'));
            
        }
        else
        {
            $user = new User;
            $user->guestUser($request['user']);
        }
        
        $billingAddress = new Address;
        $billingAddress->createBillingAddress($request['address'], $user->id);

        $shippingMethod = ShippingMethod::find($request['shipping']);
        $paymentMethod = PaymentMethod::where('payment_method', $request['payment'])->pluck('id');
        $totalPrice = (Cart::cost() + $shippingMethod->shipping_cost);

        $shippingAddressId = $billingAddress->id;
        if (Session::get('shippingAddress'))
        {
            $shippingAddressId = Session::get('shippingAddress');
        }
        
        //make order (maybe change this to take an array?)
        $order = new Order;
        $order->createOrder($user->id, $shippingMethod->id, $paymentMethod[0], $billingAddress->id, $request['userNote'], $totalPrice, $shippingAddressId);
        
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
        if (Session::get('shippingAddress'))
        {
            $address = Address::find(Session::get('shippingAddress'));
        }

        $cart = Session::get('cart');
        Session::forget('cart');
        Session::forget('shippingAddress');

        return view('order/store',
        [
            'products' => $products,
            'cart' => $cart,
            'cart_products' => $products,
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

    public function show($id)
    {
        $order = Order::with(['user', 'products'])->find($id);

        return view('order/show',
        [
            'order' => $order
        ]);
    }
    
}