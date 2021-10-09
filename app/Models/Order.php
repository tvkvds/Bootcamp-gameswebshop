<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipping()
    {
        return $this->belongsTo(ShoppingMethod::class);
    }

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount');
        
    }

    public function shippingAddress()
    {
        return $this->hasOne(Address::class)->where('billing_address', '0');
    }

    public function createOrder($userId, $shippingMethod, $paymentMethod, $billingAddressId, $userNote, $shippingCost, $shippingAddress)
    {
        $this->user_id = $userId;
        $this->shipping_method_id = $shippingMethod;
        $this->payment_method_id = $paymentMethod;
        $this->shipping_address = $shippingAddress;
        $this->billing_address = $billingAddressId;
        $this->user_note = $userNote;
        $this->total_price = (Cart::cost() + $shippingCost);
        $this->total_vat = Cart::vat();
        $this->status = 'processing';

        $this->save();
    }

}
