<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_id' => User::factory()->create()->id,
            'product_id' => Product::factory()->create()->id,
            'rating' => rand(1,5),
            'review' => $this->faker->paragraph()
            
        ];
    }
}
