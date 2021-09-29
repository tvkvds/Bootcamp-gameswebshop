<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Session;

class Cart extends Model
{
    public static function Cart(array $items)
    {
        if (Session::get('cart'))
        {
            //get current cart
            $cart = Session::get('cart');

            foreach ($items as $product => $amount)
            {
                $amount = (string)$amount;
            }

            //check cart and passed array for identical product entries, adjust amount
            //else, add product entry to cart
            
            foreach ($items as $product => $amount)
            {
                if (isset($items[$product]) && isset($cart[$product])) 
                {
                    $cart[$product] = $items[$product];
                }
                else
                {
                    $cart += array($product => $amount);
                }

                
            }

            //remove unvalid entries 
            foreach ($cart as $product => $amount)
            {
                if ($amount === 0 || $amount === '0')
                {
                    unset($cart[$product]);
                }
            }

            //replace session cart with the updated cart array
            Session::put('cart', $cart);

            return Session::get('cart');
        }
        else 
        {
            foreach ($items as $product => $amount)
            {
                if ($amount === 0 || $amount === NAN || $amount === '0')
                {
                    unset($items[$product]);
                }
            }

            Session::put('cart', $items);

            return Session::get('cart');
        }
    }
    
}
