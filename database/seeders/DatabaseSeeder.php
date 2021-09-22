<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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



        \App\Models\Product::factory(50)->create()->each(function ($p){


            // product images 

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'box-art.png',
                'box' => 0,
                'product_id' => $p
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'carl-raw-m3hn2Kn5Bns-unsplash.jpg', 
                'box' => 1,
                'product_id' => $p
            ]);


            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'fabio-silva-nmTm7knUnqs-unsplash.jpg',
                'box' => 1,
                'product_id' => $p
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'jakub-sisulak-L1AEdl-iLL4-unsplash.jpg',
                'box' => 1,
                'product_id' => $p
            ]);

            // product ratings

            \App\Models\Rating::factory(rand(0,10))->create([
                'product_id' => $p,
                'user_id' => rand(1, 10)
            ]);

            $catprod = [

                [
                    'product_id' => $p->id,
                    'category_id' => 1, 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => 2, 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => 3, 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => 4, 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => 5, 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => 6, 
                ],
        
            ];

            DB::table('category_product')->insert($catprod);

        });


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

        \App\Models\Order::factory(25)->create();



    }
}
