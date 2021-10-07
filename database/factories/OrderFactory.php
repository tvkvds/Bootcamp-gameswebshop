<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'shipping_method_id' => $this->faker->numberBetween(1, 3),
            'payment_method_id' => $this->faker->numberBetween(1, 3),
            'user_note' => $this->faker->sentence(25),
            'total_price' => 12.00,
            'total_vat' => 12.00,
            'shipping_address' => $this->faker->randomNumber(2, false),
            'billing_address' => $this->faker->randomNumber(2, false),
        ];
    }
}
