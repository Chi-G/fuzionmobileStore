<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // List of actual image paths in public/frontend/assets/images/
        $imagePaths = [
            'blog-list-1.jpg',
            'blog-list-2.jpg',
            'blog-list-3.jpg',
        ];

        // Optional PDF paths in storage/pdfs/ (add actual files if needed)
        $pdfPaths = [
            null, // Some posts have no PDF
            'sample-1.pdf',
            'sample-2.pdf',
        ];

        // Categories for variety
        $categories = ['Technology', 'Education', 'Business', 'Lifestyle', 'Programming'];

        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'title' => $faker->sentence(4),
                'content' => $faker->paragraphs(3, true),
                'type' => $faker->randomElement(['blog', 'journal']),
                'category' => $faker->randomElement($categories),
                'tags' => json_encode($faker->words(3)),
                'image_path' => $faker->randomElement($imagePaths),
                'pdf_path' => $faker->randomElement($pdfPaths),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
