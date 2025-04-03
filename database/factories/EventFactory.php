<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'date' => fake()->dateTimeThisYear(),
            'time' => fake()->time(),
            'description' => fake()->paragraph(),
            'banner_path' => fake()->imageUrl(),
            'type' => fake()->randomElement(['virtual', 'physical']),
            'location' => fn($attributes) => $attributes['type'] === 'physical' ? fake()->address() : null,
            'zoom_link' => fn($attributes) => $attributes['type'] === 'virtual' ? fake()->url() : null,
        ];
    }
}
