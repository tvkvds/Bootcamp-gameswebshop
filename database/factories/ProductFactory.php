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
        $discount = [$this->faker->randomFloat(2, 10, 30), null];

        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 30, 70),
            'price_discount' => $discount[$this->faker->boolean(70)],
            'stock' => $this->faker->numberBetween(0, 100),
            'publisher' => $this->faker->company(),
            'release_date' => $this->faker->date(),
            'slug' => $this->faker->slug(3, false),
            'sold' => $this->faker->numberBetween(0, 200),
            'vat' => $this->faker->numberBetween(0,21),
        ];
    }
}
