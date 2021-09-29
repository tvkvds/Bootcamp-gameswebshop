<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Platform;

class SearchController extends Controller
{
    public function index()
    {
        try
        {
            $products = Product::first()->with(['categories', 'images'])
            //->limit(15)
            ->withAvg('ratings as ratings_avg', 'rating')
            ->withCount('ratings'); 
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }
        
        return view('search/index', [
            'products' =>  $products->filter(request(['search', 'categories', 'platforms']))->get(),
            'categories' => Category::all(),
            'platforms' => Platform::all(),
        ]);
    
    }

}
