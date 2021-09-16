<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        
        return view('products/index', [
            'products' => $products,       
        
        ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->with('images')->get();

        return view('products/show', [
            'product' => $product,       
        
        ]);
    }


}

