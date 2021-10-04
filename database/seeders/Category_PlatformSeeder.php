<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Category_PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  category data
        
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

        //  platform data 

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
    }
}
