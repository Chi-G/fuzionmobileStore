<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MarketingStrategyFactory extends Factory {
    public function definition() {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'brochure_path' => $this->faker->filePath(),
        ];
    }
}
