<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'name' => 'Dorothea Rempel Sr.',
            'designation' => 'Executive',
            'image' => 'images/team/team-1.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'Elmer Renner',
            'designation' => 'Executive',
            'image' => 'images/team/team-2.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'Scotty Durgan',
            'designation' => 'Executive',
            'image' => 'images/team/team-3.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'Lydia Lynch',
            'designation' => 'Executive',
            'image' => 'images/team/team-4.jpg'
        ]);
    }
}
