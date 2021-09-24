<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index()
    {
        
        $products = Product::oldest()->with(['categories', 'images', 'ratings'])->limit(15);
        
        
       
        if (request('search'))
        
        {
            $products
                ->where('name', 'like', '%' . request('search') . '%')
                ->limit(15);          
        }

    

        

        
        
       
        
        return view('search/index', [
            'yeet' => 'yoot',
            'products' => $products->get()
        ]);
    
    }

    protected function getPosts()
    {
        return Post::latest()->filter()->get();
    }
}
