<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\User::factory(10)->create()->each(function ($u){
           
            \App\Models\Address::factory(rand(0,2))->create([
                'user_id' => $u
            ]);
        });


        \App\Models\User::factory(1)->create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@webshop.com'
        ]);
        

       \App\Models\Product::factory(100)->create();

        //   category data
        
        \App\Models\Category::factory()->create(
            [
                'name' => 'Action',
                'slug' => 'action'
            ]
        );

        \App\Models\Category::factory()->create(
            [
                'name' => 'Adventure',
                'slug' => 'adventure'
            ]
        );

        \App\Models\Category::factory()->create(
            [
                'name' => 'RPG',
                'slug' => 'rpg'
            ]
        );

        \App\Models\Category::factory()->create(
            [
                'name' => 'Sim',
                'slug' => 'sim'
            ]
        );

        \App\Models\Category::factory()->create(
            [
                'name' => 'Strategy',
                'slug' => 'strategy'
            ]
        );
        \App\Models\Category::factory()->create(
            [
                'name' => 'Sports',
                'slug' => 'sports'
            ]
        );
        
       

        \App\Models\Rating::factory(10)->create();

        //   platform data 

        \App\Models\Platform::factory()->create([
            'platform' => 'Xbox'
        ]);
        \App\Models\Platform::factory()->create([
            'platform' => 'Playstation 5'
        ]);
        \App\Models\Platform::factory()->create([
            'platform' => 'PC'
        ]);
        \App\Models\Platform::factory()->create([
            'platform' => 'Nintendo Switch'
        ]);

        //   paymentmethod data

        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'ideal'
        ]);

        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'paypal'
        ]);
        \App\Models\PaymentMethod::factory()->create([
            'payment_method' => 'creditcard'
        ]);

        //   shippingmethod data

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Free',
            'shipping_cost' => 0
        ]);

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Standard',
            'shipping_cost' => 8.00
        ]);

        \App\Models\ShippingMethod::factory()->create([
            'shipping_method' => 'Express',
            'shipping_cost' => 12.00
        ]);
        
        //   order data

        \App\Models\Order::factory(5)->create();



    }
}
