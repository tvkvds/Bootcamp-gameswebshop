<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Product;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $imgLocations = [
            '/images/' . 'carl-raw-m3hn2Kn5Bns-unsplash.jpg', 
            '/images/' . 'fabio-silva-nmTm7knUnqs-unsplash.jpg',
            '/images/' . 'jakub-sisulak-L1AEdl-iLL4-unsplash.jpg',
            '/images/' . 'box-art.png',
            
        ];

        return [
            
            'product_id' => rand(1,50),
            'alt' => $this->faker->word(),
            #'location' => $this->faker->imageUrl(640, 480, 'yeet', true),
            'location' => $imgLocations[rand(0,3)],
            'box' => $this->faker->boolean(),
            'width' => $this->faker->randomNumber(3, true),
            'height' => $this->faker->randomNumber(3, true),
        ];
    }
}
