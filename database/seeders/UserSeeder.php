<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
