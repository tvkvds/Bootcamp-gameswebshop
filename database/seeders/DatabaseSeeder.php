<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       
        \App\Models\User::factory(9)->create()->each(function ($u){
           
            \App\Models\Address::factory(rand(0,2))->create([
                'user_id' => $u
            ]);

        });

        \App\Models\User::factory(1)->create([

            'username' => 'testuser',
            'password' => bcrypt('password'),
            'email' => 'test@mail.com'

        ])->each(function ($u){
           
            \App\Models\Address::factory(2)->create([
                'user_id' => $u,
                
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




        \App\Models\Product::factory(50)->create()->each(function ($p){


            // product images 

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'box-art.png',
                'box' => 0,
                'product_id' => $p,
               
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
            
            // category_product pivot table
            $catprod = [

                [
                    'product_id' => $p->id,
                    'category_id' => rand(1,2), 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => rand(3,4), 
                ],
                [
                    'product_id' => $p->id,
                    'category_id' => rand(5,6), 
                ],
        
            ];

            DB::table('category_product')->insert($catprod);

            // platform_product pivot table
            $platprod = [

                [
                    'product_id' => $p->id,
                    'platform_id' => rand(1,2), 
                ],
                [
                    'product_id' => $p->id,
                    'platform_id' => rand(3,4), 
                ],
        
            ];

            DB::table('platform_product')->insert($platprod);

            //product_user pivot table

            $produser =[
                [
                    'product_id' => $p->id,
                    'user_id' => rand(1,10), 
                ],
                [
                    'product_id' => $p->id,
                    'user_id' => rand(1,10), 
                ],
                [
                    'product_id' => $p->id,
                    'user_id' => rand(1,10), 
                ],
            ];
            
            DB::table('platform_product')->insert($platprod);

        });


        
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
