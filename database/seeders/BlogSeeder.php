<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'Rrefurbished Laptops',
            'sub_title' => 'What Makes Refurbished Laptops a Value for money Deal?',
            'information' => 'Technology is growing and so does our dependency on it. It has grown to be a necessity of this age. The market is flooded with machines and gadgets flaunting latest technology. However, there is a gap between ‘I can buy it and I Should buy it’. It is this gap that controls the buying behavior of an individual.

            They say “necessity is the mother of invention”. It was this necessity that a whole new industry developed providing refurbished machines.

            By 2031, the global market for refurbished laptops and computers would reach eight billion USD, according to the Refurbished Computer and Laptop Market report of 2021-2031 from Transparency Market Research. It is growing at a whopping 11% CAGR.',
            'image' => 'front/img/wh.jpg',
        ]);
    }
}
