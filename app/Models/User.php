<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\Order;
use App\Models\Address;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes ;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Retrieves or creates a guest User 
     */
    public static function guestUser($request)
    {
        try 
        {
            $user = self::firstOrNew(
                ['email' =>  $request['email'], 'id' => Session::get('user')]
            );
    
            $user->registered = 0;
            $user->email = $request['email'];
            $user->first_name = $request['first_name'];
            $user->last_name = $request['last_name'];
            $user->phone = $request['phone'];
            $user->company = $request['company'];
            
            $user->save();
    
            return $user;   
        }
        catch(Exception $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }
        
    }


    

   
 
}
