<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class TestController extends Controller
{
    public function index()
    {
        
       
    
        
            
        return Cart::cost();
    }
}
