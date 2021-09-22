<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::with('products')->get();

        //would be nice to have this as a single request too 
        foreach ($categories as $category)
        {

            //dd($category->onlyFiveProducts);
            foreach ($category->products as $product)
            {
                $product->images;
            }
        }
        
        return view('categories/index', [
            'categories' => $categories, 
            
        
        ]);
    
    }

    public function show($slug)
    {

        $category = Category::where('slug', $slug)->with('products')->firstOrFail();

        foreach ($category->products as $product)
        {
            $product->images;
        }
        
        return view('categories/show', [
            
            'category' => $category, 
        
        ]);
    }
    
}
