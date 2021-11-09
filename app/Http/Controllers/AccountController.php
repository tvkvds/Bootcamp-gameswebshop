<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use Exception;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        try
        {
            $userId = Auth::id();

            $user = User::with(['orders', 'addresses'])->find($userId);
            $latestOrder = Order::where('user_id', $userId)->latest()->first();
            $latestBillingAddress = Address::where('user_id', $userId)->where('billing_address', 1)->latest()->first();
            $latestShippingAddress = Address::where('user_id', $userId)->where('billing_address', 0)->latest()->first();
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }

        return view('account/index', [
            'user' => $user,
            'latestOrder' => $latestOrder,
            'billingAddress' => $latestBillingAddress,
            'shippingAddress' => $latestShippingAddress
        ]);
    }
}