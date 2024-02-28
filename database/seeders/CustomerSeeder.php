<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'name' => 'Rana',
            'phone' => '01768139923',
            'address' => 'Kakrail',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
