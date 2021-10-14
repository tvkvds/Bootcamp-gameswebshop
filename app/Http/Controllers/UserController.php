<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $user = User::with(['orders', 'addresses'])->find(1);
        return view('/user/show', [
            'user' => $user
        ]);
    }

    public function delete()
    {
        return redirect('home/index');
    }
}
