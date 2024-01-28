<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'name' => 'Mr. Kamren Thiel',
            'profession' => 'Business',
            'feedback' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'images/team/testimonial-1.jpg'
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Marvin Maggio',
            'profession' => 'Service',
            'feedback' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'images/team/testimonial-2.jpg'
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Amara King',
            'profession' => 'CEO',
            'feedback' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'images/team/testimonial-3.jpg'
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Tamara Labadie',
            'profession' => 'Shop Owner',
            'feedback' => 'Lorem ipsum dolor sit amet consectetur adipisc elit sed.',
            'image' => 'images/team/testimonial-4.jpg'
        ]);
    }
}

