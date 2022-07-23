<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'site_favicon'          => 'favicon.ico',
            'site_logo'             => 'logo.png',
            'about_us_summary'      => 'We, B2B Exports LLC, are an IT Asset Life Cycle Management company. Our wide range of services is focused around helping in augmenting the IT asset sustainability.',
            'site_title'            => 'b2bexportsllc',
            'meta_description'      => 'b2bexportsllc',
            'meta_keywords'         => 'b2bexportsllc',
            'site_address'          => '5317 Peachtree Blvd suite T 200, Chamblee, GA 30341, United States',
            'site_email'            => 'helpdesk@b2bexportsllc.com',
            'site_phone_number'     => '(252) 266-0299',
            'site_mission'          => 'Our circular business model based on the ethos of ethics, sustainability, and social responsibility towards the earth is focused on aiding businesses to adapt a more environment friendly alternatives and provide them with services that not only superior in quality but also leaves a positive impact on the society. Our aim is to ensure that all businesses achieve their goal of sustainability and leave as little carbon footprint as possible.',
            'site_vision'           => 'Our vision is to aid every business in achieving minimum carbon footprint. We strongly believe IT waste should not cost the environment and therefore strive to provide best IT asset disposition services to all our clients around the world.',
            'facebook_url'          => '',
            'linkedin_url'          => '',
            'instagram_url'         => '',
            'youtube_url'           => '',
        ]);
    }
}
