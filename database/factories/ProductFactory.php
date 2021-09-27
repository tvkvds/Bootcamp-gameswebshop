<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'price' => $this->faker->regexify('[0-9]{2}[0-9]{2}'),
            'price_discount' => $this->faker->numberBetween(0, 39),
            'stock' => $this->faker->numberBetween(0, 1000),
            'publisher' => $this->faker->company(),
            'release_date' => $this->faker->date(),
            'slug' => $this->faker->slug(3, false),
            'sold' => $this->faker->numberBetween(0, 200),

        ];
    }
}
