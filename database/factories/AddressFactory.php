<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use Illuminate\Support\Str;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


      
        return [

            'user_id' => $this->faker->randomNumber(3, false),
            'country' => $this->faker->countryCode(),
            'street' => $this->faker->streetName(),
            'zipcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'billing_address' => $this->faker->boolean(),
            'address_1' => $this->faker->word() . ' ' . $this->faker->randomNumber(3, false),
            'address_2' => Str::random(10),
            
        ];
    }
}
