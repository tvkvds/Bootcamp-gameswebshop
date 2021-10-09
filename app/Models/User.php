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

class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes ;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'username',
        'phone',
        'gender',
        'birthdate',
        'company',
        'registered'
    ];

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

    public function guestUser($request)
    {
        $this::firstOrNew(
                 ['email' =>  request('email')]
                //['id' => auth/session]
        );
       
        $this->registered = 0;
        $this->email = $request['email'];
        $this->first_name = $request['first_name'];
        $this->last_name = $request['last_name'];
        $this->phone = $request['phone'];
        $this->company = $request['company'];
         
        $this->save();

        return $this;
    }

    
}
