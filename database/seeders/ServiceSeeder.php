<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Mosquito control',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'mosquito.jpg'
        ]);
        DB::table('services')->insert([
            'name' => 'Ant control',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'ant.jpg'
        ]);
        DB::table('services')->insert([
            'name' => 'Flies control',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'flies.jpg'
        ]);
        DB::table('services')->insert([
            'name' => 'Rodent control',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'rodent.jpg'
        ]);
    }
}
