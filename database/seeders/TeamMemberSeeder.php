<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        // Clear existing team members to avoid duplicates
        TeamMember::truncate();

        TeamMember::create([
            'name' => 'Dr. Lisa Harper',
            'role' => 'Mobile Tech Specialist',
            'bio' => 'Expert in mobile technology solutions.',
            'image_path' => 'team-1.jpg',
            'social_links' => [
                'facebook' => 'https://facebook.com/lisaharper',
                'twitter' => 'https://twitter.com/lisaharper',
                'linkedin' => 'https://linkedin.com/in/lisaharper',
                'instagram' => 'https://instagram.com/lisaharper',
            ],
        ]);

        TeamMember::create([
            'name' => 'Mark Evans',
            'role' => 'Event Coordinator',
            'bio' => 'Organizes impactful events.',
            'image_path' => 'team-3.jpg',
            'social_links' => [
                'facebook' => 'https://facebook.com/markevans',
                'twitter' => 'https://twitter.com/markevans',
                'linkedin' => 'https://linkedin.com/in/markevans',
                'instagram' => 'https://instagram.com/markevans',
            ],
        ]);

        TeamMember::create([
            'name' => 'Andrew Flecher',
            'role' => 'Business Studies',
            'bio' => 'Specialist in business education.',
            'image_path' => 'team-2.jpg',
            'social_links' => [
                'facebook' => 'https://facebook.com/andrewflecher',
                'twitter' => 'https://twitter.com/andrewflecher',
                'linkedin' => 'https://linkedin.com/in/andrewflecher',
                'instagram' => 'https://instagram.com/andrewflecher',
            ],
        ]);

        TeamMember::create([
            'name' => 'Sophie Kim',
            'role' => 'Content Developer',
            'bio' => 'Creates engaging content.',
            'image_path' => 'team-4.jpg',
            'social_links' => [
                'facebook' => 'https://facebook.com/sophiekim',
                'twitter' => 'https://twitter.com/sophiekim',
                'linkedin' => 'https://linkedin.com/in/sophiekim',
                'instagram' => 'https://instagram.com/sophiekim',
            ],
        ]);
    }
}
