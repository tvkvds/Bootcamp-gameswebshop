<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Models\Address;
use App\Models\User;


class AddressController extends Controller
{
    public function ajaxcreate(Request $request)
    {
        try
        {
            $user = User::guestUser($request['user']);

            $address = new Address;
            $address->createShippingAddress($request->address, $user->id);

            Session::put('shippingAddress', $address->id);
            Session::put('user', $user->id);

            return response()->json([
                'success'       => true,
            ]);   
        }
        catch(Exception $e)
        {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }
    }
}
