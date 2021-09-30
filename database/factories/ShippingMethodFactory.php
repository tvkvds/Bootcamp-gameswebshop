<?php

namespace Database\Factories;

use App\Models\ShippingMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingMethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingMethod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       
        return [
            'shipping_method' => $this->faker->word(),
            'shipping_cost' => $this->faker->randomNumber(4, true),
            'time' => $this->faker->word(5)
        ];
    }
}
