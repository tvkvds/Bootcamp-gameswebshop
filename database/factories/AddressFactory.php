<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

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
            'unit' => $this->faker->buildingNumber(),
            'zipcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'unit_extra' => $this->faker->secondaryAddress(),  
            'billing_address' => $this->faker->boolean()
            
        ];
    }
}
