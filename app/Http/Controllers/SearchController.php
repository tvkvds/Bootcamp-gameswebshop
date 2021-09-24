<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
    public function index()
    {
        $products = Product::first()->with(['categories', 'images', 'ratings'])
                                    ->limit(15)
                                    ->withAvg('ratings as ratings_avg', 'rating')
                                    ->withCount('ratings');

        #dd(request());

        //fetch all category form values and put in array for filter
        
        return view('search/index', [
            'products' =>  $products->filter(request(['search']))->get(),
            'categories' => Category::all(),
        ]);
    
    }

}
