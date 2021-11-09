<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        // if ($request["product"] OR $request["amount"])
        // {
           

        //     $validatedData = $request->validate([
        //         'product' => ['required', 'numeric', 'max:10000'],
        //         'amount' => ['required', 'numeric', 'max:99'],
        //     ]);
           
        // }

        if (request('product') OR request('amount'))

        {
                $validatedData = request()->validate([
                'product' => ['required', 'numeric', 'max:10000'],
                'amount' => ['required', 'numeric', 'max:99'],
            ]);
        }

      
        
        return view('test/index', [
            
        ]);
        
    }
}
