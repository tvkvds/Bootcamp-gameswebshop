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
        /*
        $table->id();
        $table->foreignId('user_id')->constrained();
        $table->foreignId('shipping_method_id')->constrained();
        $table->foreignId('payment_method_id')->constrained();
        $table->date('date');
        $table->text('user_note');
        $table->integer('total_price');
        $table->timestamps();
        $table->softdeletes();
        */
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'shipping_method_id' => $this->faker->numberBetween(1, 3),
            'payment_method_id' => $this->faker->numberBetween(1, 3),
            'date' => now(),
            'user_note' => $this->faker->sentence(25),
            'total_price' => 12.00
        ];
    }
}
