<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Exception;

class CartController extends Controller
{
    public function update()
    {
        //[0-9]{2} regex for basic validation

        Cart::cart(request('product'));
       
        return back()->withInput();
    }

    public function ajaxcart(Request $request)
    {
        try
        {
            $items = [$request->product_id => $request->product_amount];

            Cart::cart($items);

            return response()->json([
                'success'       => true,
            ]);   
        }
        catch(Exception $e)
        {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }
    }

    
}
