<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'name' => 'Mosquito control',
            'description' => 'Mosquito control manages the population of mosquitoes to reduce their damage to human health, economies, and enjoyment. Mosquito control is a vital public-health practice throughout the world and especially in the tropics because mosquitoes spread many diseases'
        ]);
        DB::table('blogs')->insert([
            'name' => 'Mice control',
            'description' => 'Rodents can carry a wide variety of diseases transmissible to humans. If you suspect you have mice in your home, don’t worry, there are many ways you can not only prevent but get rid of mice in your home.'
        ]);
        DB::table('blogs')->insert([
            'name' => 'Fly control',
            'description' => 'Consider using common garden plants to repel flies. Strong herbs such as lavender, mint and bay leaf can be planted in window boxes to discourage flies from entering windows. You can also plant these herbs in pots and place them in the kitchen and elsewhere around the home.'
        ]);
    }
}
