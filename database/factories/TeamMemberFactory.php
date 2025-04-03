<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'bio' => fake()->paragraph(),
            'image_path' => fake()->imageUrl(),
            'social_links' => json_encode(['twitter' => fake()->url(), 'linkedin' => fake()->url()]),
            'display_order' => fake()->numberBetween(1, 10),
        ];
    }
}
