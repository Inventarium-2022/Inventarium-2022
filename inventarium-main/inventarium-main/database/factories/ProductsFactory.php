<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word;
        return [
            'name'=> $name,
          //  'slug'=> Str::slug($name),
            'cover'=> $this->faker->imageUrl,
            'price'=> $this->faker->randomFloat(1, 20, 30),
            'description'=> $this->faker->sentence,
            'stock'=> $this->faker->randomDigit(),
        ];
    }
}
