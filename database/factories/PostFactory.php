<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory {
    protected $model = \App\Models\Post::class;

    public function definition() {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraphs(3, true),
            'type' => $this->faker->randomElement(['blog', 'journal']),
            'category' => $this->faker->word(),
            'tags' => json_encode($this->faker->words(3)),
            'image_path' => $this->faker->imageUrl(640, 480, 'posts'),
            'pdf_path' => $this->faker->boolean() ? $this->faker->filePath() : null,
        ];
    }
}
