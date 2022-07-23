<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::create([
            'happy_clients'         => 2000,
            'completed_works'       => 100,
            'winning_awards'        => 50,
            'completed_projects'    => 305,
        ]);
    }
}
