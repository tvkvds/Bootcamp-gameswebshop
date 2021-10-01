<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Image;
use App\Models\Rating;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        try
        {
            $products = Product::inRandomOrder()->with(['categories', 'images', 'ratings', 'platforms'])
            ->limit(20)
            ->withAvg('ratings as ratings_avg', 'rating')
            ->withCount('ratings');
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }
       

        return view('home/index', [
            'products' => $products->get(),
            'categories' => Category::all(),
            'cart' => Session::get('cart'),
            'cart_products' => Cart::products()
        ]);

    }
}
