<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public function cart(int $id = null , int $amount = null)
    {
        return Session::put('cart', [$id => $amount]);
    }
}