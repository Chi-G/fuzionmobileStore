<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WebinarFactory extends Factory {
    protected $model = \App\Models\Webinar::class;

    public function definition() {
        return [
            'title' => $this->faker->sentence(4),
            'date' => $this->faker->dateTimeThisYear(),
            'time' => $this->faker->time(),
            'description' => $this->faker->paragraph(),
            'platform' => $this->faker->randomElement(['Zoom', 'Webex', 'Google Meet']),
            'meeting_id' => $this->faker->numerify('##########'),
            'meeting_password' => $this->faker->randomNumber(6),
            'meeting_url' => $this->faker->url(),
            'registration_link' => $this->faker->url(),
            'recording_url' => $this->faker->url(),
        ];
    }
}
