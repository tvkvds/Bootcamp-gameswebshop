<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
        $table->id();
            $table->foreignId('product_id')->constrained()->nullable();
            $table->foreignId('user_id')->constrained();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
            $table->softdeletes();
            */
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            
        ];
    }
}
