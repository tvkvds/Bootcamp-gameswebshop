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

    \App\Models\Product::factory()->create(
            [
                'vat' => 21,
                //eventueel 'name' => 'name' etc..
            
            ]
        )->each(function ($p){

            // product images 

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'box-art.png', //naam image 1
                'box' => 1,
                'product_id' => $p,
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'carl-raw-m3hn2Kn5Bns-unsplash.jpg', //naam image 2
                'box' => 0,
                'product_id' => $p
            ]);


            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'fabio-silva-nmTm7knUnqs-unsplash.jpg', //naam image 3
                'box' => 0,
                'product_id' => $p
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/' . 'jakub-sisulak-L1AEdl-iLL4-unsplash.jpg', //naam image 4
                'box' => 0,
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

        });
    }
}