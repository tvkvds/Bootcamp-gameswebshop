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
           
            \App\Models\Address::factory(1)->create([
                'user_id' => $u
            ]);
        });


        \App\Models\User::factory(1)->create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@webshop.com'
        ]);
        

        \App\Models\Product::factory(50)->create()->each(function ($u){

            \App\Models\Image::factory(3)->create([
                'product_id' => $u
            ]);
        }); 

        \App\Models\Category::factory(5)->hasAttached(\App\Models\Product::factory(10))->create();
        
       

        \App\Models\Rating::factory(5)->create();


    }
}
