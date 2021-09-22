<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        try
        {
            $products = Product::with('images')->get();
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }
        
        
        return view('products/index', [
            'products' => $products,       
        
        ]);
    }

    public function show($slug)
    {
        try 
        {
            $product = Product::where('slug', $slug)->firstOrFail();
            $product->with('images')->get();
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }

        return view('products/show', [
            'product' => $product,       
        
        ]);
    }


}

