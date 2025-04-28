<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'type' => $this->faker->randomElement(['smartphone', 'vr', 'sd_card', 'software']),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Electronics', 'Accessories', 'Software', 'Wearables']),
            'author_name' => $this->faker->company,
            'author_image' => $this->faker->randomElement(['author-1.jpg', 'author-2.jpg', 'author-3.jpg']),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'enrollment_count' => $this->faker->numberBetween(0, 1000),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'image_path' => $this->faker->randomElement(['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg']),
        ];
    }
}
