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

    public function ajaxupdate(Request $request)
    {
        try
        {
            if ($request['address_id'] > 0)
            {
                $address = Address::find($request['address_id']);

                $address->address_1 = $request['address_1'];
                $address->address_2 = $request['address_2'];
                $address->country = $request['country'];
                $address->city = $request['city'];
                $address->zipcode = $request['zipcode'];

                $address->save();
            }
            else
            {
                $address = new Address;

                $address->address_1 = $request['address_1'];
                $address->address_2 = $request['address_2'];
                $address->country = $request['country'];
                $address->city = $request['city'];
                $address->zipcode = $request['zipcode'];
                $address->user_id = $request['user_id'];
                if ($request->type == '#billing')
                {
                    $address->billing_address = 1;
                }
                if ($request->type == '#shipping')
                {
                    $address->billing_address = 0;
                }
                
                $address->save();
            }
            
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
