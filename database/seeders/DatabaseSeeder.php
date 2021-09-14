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
        \App\Models\User::factory(1)->create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@webshop.com'
        ]);
        \App\Models\Address::factory(10)->create();

        \App\Models\Product::factory(100)->create();

        \App\Models\Image::factory(10)->create();

        \App\Models\Category::factory(5)->create();

        \App\Models\Rating::factory(5)->create();


    }
}
