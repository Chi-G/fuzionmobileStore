<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
use Illuminate\Database\Seeder;

class CompanyInfoSeeder extends Seeder
{
    public function run()
    {
        CompanyInfo::create([
            'description' => 'FuzionMobile is dedicated to revolutionizing learning through innovative technology.',
            'mission' => 'To provide accessible and impactful educational solutions.',
            'vision' => 'Empowering learners with innovative tools.',
            'logo_path' => 'logos/fuzionmobile.png',
            'video_url' => 'https://www.youtube.com/watch?v=example',
            'faculties' => 78,
            'students' => 5000,
            'books' => 400000,
            'seminars' => 1200,
            'scholarships' => 'We offer scholarships to support deserving students.',
            'alumni' => 'Our alumni network empowers graduates to succeed.',
        ]);
    }
} 
