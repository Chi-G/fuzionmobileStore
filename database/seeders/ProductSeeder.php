<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $imagePaths = ['product-1.jpg', 'product-2.jpg', 'product-3.jpg', 'product-4.jpg'];
        $types = ['smartphone', 'vr', 'sd_card', 'software'];
        $categories = ['Electronics', 'Accessories', 'Software', 'Wearables'];
        $authorImages = ['author-1.jpg', 'author-2.jpg', 'author-3.jpg'];

        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraphs(3, true),
                'type' => $faker->randomElement($types),
                'category' => $faker->randomElement($categories),
                'author_name' => $faker->company,
                'author_image' => $faker->randomElement($authorImages),
                'rating' => $faker->randomFloat(1, 1, 5),
                'enrollment_count' => $faker->numberBetween(0, 1000),
                'price' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->numberBetween(0, 100),
                'image_path' => $faker->randomElement($imagePaths),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
