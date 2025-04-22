<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $imagePaths = [
            'team/john-doe.jpg',
            'team/jane-smith.jpg',
            'team/mike-jones.jpg',
        ];

        for ($i = 0; $i < 9; $i++) {
            TeamMember::create([
                'name' => $faker->name,
                'role' => $faker->jobTitle,
                'bio' => $faker->paragraph(3),
                'image_path' => $faker->randomElement($imagePaths),
                'social_links' => [
                    'twitter' => $faker->url,
                    'linkedin' => $faker->url,
                    'facebook' => $faker->url,
                ],
                'display_order' => $i,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
