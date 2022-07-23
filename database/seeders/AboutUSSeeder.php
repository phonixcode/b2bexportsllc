<?php

namespace Database\Seeders;

use App\Models\AboutUS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUS::create([
            'title' => 'Electeronic Recycling',
            'sub_title' => 'How Can An IT Department Reduce Costs?',
            'information' => 'Want to gain better profits? Want to be among top businesses? Want to gain a bigger market share? Guess what? we are talking money..! Something we have been working hard on ..! Profit, cost, and revenue are beautiful relations. Of Late, business consultants across the world, have stressed the importance of controlling cost. Saving on […]',
            'image' => 'front/img/choose-bg-left.jpg',
        ]);
    }
}
