<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Rating;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->with(['categories', 'images', 'ratings']);

        return view('welcome', [
            'products' => $products
        ]);
    }
}
