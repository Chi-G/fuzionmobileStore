<?php

namespace Database\Seeders;

use App\Models\{User, Admin, CompanyInfo, TeamMember, Service, Event, Webinar, Product, Post, Subscriber, MarketingStrategy};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        User::factory(10)->create();
        Admin::factory(3)->create();
        CompanyInfo::factory(1)->create();
        TeamMember::factory(5)->create();
        Service::factory(8)->create();
        Event::factory(10)->create();
        Webinar::factory(5)->create();
        Product::factory(15)->create();
        Post::factory(20)->create();
        MarketingStrategy::factory(5)->create();
        Subscriber::factory(50)->create();
    }
}
