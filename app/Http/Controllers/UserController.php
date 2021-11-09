<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class UserController extends Controller
{

    public function ajaxupdate(Request $request)
    {
        try
        {
            $user = User::find($request['user_id']);

            $user->username     = $request['username'];
            $user->first_name   = $request['first_name'];
            $user->last_name    = $request['last_name'];
            $user->phone        = $request['phone'];
            $user->email        = $request['email'];
            $user->password     = $request['password'];

            $user->save();

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
