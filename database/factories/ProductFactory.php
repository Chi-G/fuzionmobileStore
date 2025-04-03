<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    protected $model = \App\Models\Product::class;

    public function definition() {
        return [
            'name' => $this->faker->word() . ' ' . $this->faker->word(),
            'type' => $this->faker->randomElement(['hardware', 'software']),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'image_path' => $this->faker->imageUrl(640, 480, 'products'),
        ];
    }
}
