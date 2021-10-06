<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $img = [
            '1' =>  [ 'boximage' => "anno2070-1.jpg",     'img2' => "anno2070-2.jpg",     'img3' => "anno2070-3.jpg",       'img4' => "anno2070-4.jpg"],
            '2' =>  [ 'boximage' => "batman-1.jpg",       'img2' => "batman-2.jpg",       'img3' => "batman-3.jpg",         'img4' => "batman-4.jpg"],
            '3' =>  [ 'boximage' => "bioshock-1.jpg",     'img2' => "bioshock-2.jpg",     'img3' => "bioshock-3.jpg",       'img4' => "bioshock-4.jpg"],
            '4' =>  [ 'boximage' => "cod4-1.jpg",         'img2' => "cod4-2.jpg",         'img3' => "cod4-3.jpg",           'img4' => "cod4-4.jpg"],
            '5' =>  [ 'boximage' => "darksouls-1.jpg",    'img2' => "darksouls-2.jpg",    'img3' => "darksouls-3.jpg",      'img4' => "darksouls-4.jpg"],
            '6' =>  [ 'boximage' => "dirt2-1.jpeg",       'img2' => "dirt2-2.jpg",        'img3' => "dirt2-3.jpg",          'img4' => "dirt2-4.jpg"],
            '7' =>  [ 'boximage' => "f1-1.jpg",           'img2' => "f1-2.jpg",           'img3' => "f1-3.jpg",             'img4' => "f1-4.jpg"],
            '8' =>  [ 'boximage' => "factorio-1.webp",    'img2' => "factorio-2.jpg",     'img3' => "factorio-3.jpg",       'img4' => "factorio-4.jpg"],
            '9' =>  [ 'boximage' => "forest-1.jpg",       'img2' => "forest-2.jpg",       'img3' => "forest-3.jpg",         'img4' => "forest-4.jpg"],
            '10' => [ 'boximage' => "gow-1.webp",         'img2' => "gow-2.jpeg",         'img3' => "gow-3.jpeg",           'img4' => "gow-4.jpeg"],
            '11' => [ 'boximage' => "gta5-1.jpg",         'img2' => "gta5-2.jpg",         'img3' => "gta5-3.jpg",           'img4' => "gta5-4.jpg"],
            '12' => [ 'boximage' => "gw2-1.png",          'img2' => "gw2-2.jpg",          'img3' => "gw2-3.jpg",            'img4' => "gw2-4.jpg"],
            '13' => [ 'boximage' => "halo-1.jpg",         'img2' => "halo-2.jpg",         'img3' => "halo-3.jpg",           'img4' => "halo-4.jpg"],
            '14' => [ 'boximage' => "hk-1.jpeg",          'img2' => "hk-2.jpg",           'img3' => "hk-3.jpg",             'img4' => "hk-4.jpg"],
            '15' => [ 'boximage' => "hl2-1.jpg",          'img2' => "hl2-2.jpg",          'img3' => "hl2-3.jpg",            'img4' => "hl2-4.jpg"],
            '16' => [ 'boximage' => "iracing-1.jpg",      'img2' => "iracing-2.jpg",      'img3' => "iracing-3.jpg",        'img4' => "iracing-4.jpg"],
            '17' => [ 'boximage' => "legosw-1.jpg",       'img2' => "legosw-2.jpg",       'img3' => "legosw-3.jpg",         'img4' => "legosw-4.jpg"],
            '18' => [ 'boximage' => "me2-1.jpg",          'img2' => "me2-2.jpg",          'img3' => "me2-3.jpg",            'img4' => "me2-4.jpg"],
            '19' => [ 'boximage' => "mhw-1.jpg",          'img2' => "mhw-2.jpg",          'img3' => "mhw-3.jpg",            'img4' => "mhw-4.jpg"],
            '20' => [ 'boximage' => "nw-1.jpg",           'img2' => "nw-2.jpg",           'img3' => "nw-3.jpg",             'img4' => "nw-4.jpg"],
            '21' => [ 'boximage' => "ra2-1.jpg",          'img2' => "ra2-2.jpg",          'img3' => "ra2-3.jpg",            'img4' => "ra2-4.jpg"],
            '22' => [ 'boximage' => "rdr2-1.jpg",         'img2' => "rdr2-2.jpg",         'img3' => "rdr2-3.jpg",           'img4' => "rdr2-4.jpg"],
            '23' => [ 'boximage' => "rome2tw-1.jpeg",     'img2' => "rome2tw-2.jpg",      'img3' => "rome2tw-3.jpg",        'img4' => "rome2tw-4.jpg"],
            '24' => [ 'boximage' => "satisfactory-1.jpg", 'img2' => "satisfactory-2.jpg", 'img3' => "satisfactory-3.jpg",   'img4' => "satisfactory-4.jpg"],
            '25' => [ 'boximage' => "sc-1.jpg",           'img2' => "sc-2.jpg",           'img3' => "sc-3.jpg",             'img4' => "sc-4.jpg"],
            '26' => [ 'boximage' => "sc6-1.jpg",          'img2' => "sc6-2.jpg",          'img3' => "sc6-3.jpg",            'img4' => "sc6-4.jpg"],
            '27' => [ 'boximage' => "skyrim-1.png",       'img2' => "skyrim-2.jpg",       'img3' => "skyrim-3.jpg",         'img4' => "skyrim-4.jpg"],
            '28' => [ 'boximage' => "terraria-1.jpg",     'img2' => "terraria-2.jpg",     'img3' => "terraria-3.jpg",       'img4' => "terraria-4.jpg"],
            '29' => [ 'boximage' => "valheim-1.jpg",      'img2' => "valheim-2.jpg",      'img3' => "valheim-3.jpg",        'img4' => "valheim-4.jpg"],
            '30' => [ 'boximage' => "whtw2-1.jpg",        'img2' => "whtw2-2.jpg",        'img3' => "whtw2-3.jpg",          'img4' => "whtw2-4.jpg"],
        ];  

    \App\Models\Product::factory(30)->create(
            [
                'vat' => 21,
                //eventueel 'name' => 'name' etc..
            
            ]
        )->each(function ($p) use ($img){

           
            // product images 

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$p->id]['boximage'], //'/images/' . 'box-art.png',  //naam image 1
                'box' => 1,
                'product_id' => $p,
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$p->id]['img2'], //naam image 2
                'box' => 0,
                'product_id' => $p
            ]);


            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$p->id]['img3'], //naam image 3
                'box' => 0,
                'product_id' => $p
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$p->id]['img4'], //naam image 4
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