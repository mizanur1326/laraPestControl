<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            'name' => 'Basic Package',
            'price' => '100',
            'description' => 'Household pests Control, Rodent Control, Re-Service at No-Charge'
        ]);
        DB::table('prices')->insert([
            'name' => 'Standard Package',
            'price' => '200',
            'description' => 'Household pests Control, Rodent Control, Re-Service at No-Charge'
        ]);
        DB::table('prices')->insert([
            'name' => 'Premium Package',
            'price' => '300',
            'description' => 'Household pests Control, Rodent Control, Re-Service at No-Charge'
        ]);
    }
}
