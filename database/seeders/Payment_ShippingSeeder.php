<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Payment_ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  paymentmethod data

        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'ideal'
        ]);

        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'paypal'
        ]);
        
        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'creditcard'
        ]);

        //  shippingmethod data

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Free',
            'shipping_cost' => 0,
            'time' => '7 to 14 days'
        ]);

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Standard',
            'shipping_cost' => 8.00,
            'time' => '2 to 3 days'
        ]);

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Express',
            'shipping_cost' => 12.00,
            'time' => 'Same day delivery'
        ]);
    }
}
