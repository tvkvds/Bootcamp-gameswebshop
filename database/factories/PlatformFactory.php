<?php

namespace Database\Factories;

use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatformFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Platform::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $platforms = ['Playstation 4', 'PC', 'Nintendo Switch', 'Xbox'];

        return [
            'platform' => $platforms[rand(0,3)]

        ];
    }
}
