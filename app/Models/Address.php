<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes ;


    protected $fillable = [
        'country',
        'street',
        'unit',
        'zipcode',
        'city',
        'unit_extra'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createBillingAddress($request, $user_id)
    {
        
        $this->user_id = $user_id;
        $this->country = $request['country'];
        $this->address_1 = $request['address_1'];
        $this->address_2 = $request['address_2'];
        $this->city = $request['city'];
        $this->zipcode = $request['zipcode'];
        $this->billing_address = 1;

        $this->save();

        return $this;
    }

    public function createShippingAddress($request, $user_id)
    {
       

        $this->user_id = $user_id;
        $this->country = $request['country'];
        $this->address_1 = $request['address_1'];
        $this->address_2 = $request['address_2'];
        $this->city = $request['city'];
        $this->zipcode = $request['zipcode'];
        $this->billing_address = 0;

        $this->save();

        return $this;
    }

        

}
