<?php

namespace Database\Seeders;

use App\Models\Webinar;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WebinarSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $bannerPaths = ['webinar-1.jpg', 'webinar-2.jpg', 'webinar-3.jpg'];
        $platforms = ['Zoom', 'Google Meet', 'Webex'];

        for ($i = 0; $i < 20; $i++) {
            $platform = $faker->randomElement($platforms);
            $isPast = $faker->boolean(30);
            Webinar::create([
                'title' => $faker->sentence(4),
                'date' => $isPast ? $faker->dateTimeBetween('-1 year', 'now') : $faker->dateTimeBetween('now', '+1 year'),
                'time' => $faker->time('H:i'),
                'description' => $faker->paragraphs(3, true),
                'platform' => $platform,
                'banner_path' => $faker->randomElement($bannerPaths),
                'meeting_id' => $platform === 'Zoom' ? $faker->numerify('###-####-####') : null,
                'meeting_password' => $platform === 'Zoom' ? $faker->password(6, 8) : null,
                'meeting_url' => $platform === 'Zoom' || $platform === 'Google Meet' ? $faker->url : null,
                'recording_url' => $isPast ? $faker->url : null,
                'registration_link' => !$isPast ? $faker->url : null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
