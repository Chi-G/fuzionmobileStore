<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::truncate();

        Service::create([
            'title' => 'Developing Android App with v4 Pad',
            'description' => 'Learn to build Android apps using the latest tools and frameworks.',
            'category' => 'Android Development',
            'image_path' => 'courses-1.jpg',
            'author_name' => 'Andrew Paker',
            'author_image' => 'author-1.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'Fundamental Basics of Learning English',
            'description' => 'Master foundational English language skills for effective communication.',
            'category' => 'Language',
            'image_path' => 'courses-2.jpg',
            'author_name' => 'Maria Flevour',
            'author_image' => 'author-2.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'Basic Techniques of Learning Design',
            'description' => 'Explore essential UI/UX design techniques for modern applications.',
            'category' => 'UI/UX Design',
            'image_path' => 'courses-1.jpg',
            'author_name' => 'Robart Molt',
            'author_image' => 'author-3.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'Advanced English Language Proficiency',
            'description' => 'Enhance your English skills with advanced concepts and practice.',
            'category' => 'Language',
            'image_path' => 'courses-3.jpg',
            'author_name' => 'Maria Flevour',
            'author_image' => 'author-2.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'English for Professional Communication',
            'description' => 'Develop English skills tailored for professional environments.',
            'category' => 'Language',
            'image_path' => 'courses-3.jpg',
            'author_name' => 'Maria Flevour',
            'author_image' => 'author-2.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'UI/UX Design Fundamentals',
            'description' => 'Learn the core principles of user interface and experience design.',
            'category' => 'UI/UX Design',
            'image_path' => 'courses-1.jpg',
            'author_name' => 'Robart Molt',
            'author_image' => 'author-3.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'Intermediate English Language Skills',
            'description' => 'Build on basic English knowledge with intermediate-level training.',
            'category' => 'Language',
            'image_path' => 'courses-2.jpg',
            'author_name' => 'Maria Flevour',
            'author_image' => 'author-2.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);

        Service::create([
            'title' => 'Advanced Android App Development',
            'description' => 'Master advanced techniques for Android app development.',
            'category' => 'Android Development',
            'image_path' => 'courses-1.jpg',
            'author_name' => 'Andrew Paker',
            'author_image' => 'author-1.jpg',
            'enrollment_count' => 100,
            'rating' => 4.5,
            'price' => 230.00,
        ]);
    }
}
