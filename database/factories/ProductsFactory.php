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
        return [
            //data to add with factory
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph($nb = 2),
            'price' => $this->faker->numberBetween($min = 5000, $max = 8000),
            'image' => $this->faker->randomElement(['imgprod/Laptop.jpg', 'imgprod/Camera.jpg', 'imgprod/Printer.jpg']), // password

        ];
    }
}