<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        # TODO 
        # figure out how to load only 5 products per category

        $categories = Category::with('products')->get();
        
        return view('categories/index', [
            'categories' => $categories,       
        
        ]);
    
    }

    public function show($slug)
    {

        # TODO
        # figure out how to load the images for the products

        $category = Category::where('slug', $slug)->with('products')->firstOrFail();
        $category->productImages;

        dd($category->productImages);
        return view('categories/show', [
            
            'category' => $category, 
        
        ]);
    }
    
}
