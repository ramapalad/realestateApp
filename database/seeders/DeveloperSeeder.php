<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::insert([
            [
                'name' => 'VISTA LAND',
                'code' => 'VISTA',
                'is_active' => true,
            ],
            [
                'name' => 'DMCI HOMES',
                'code' => 'DMCI',
                'is_active' => true,
            ],
            [
                'name' => 'AYALA LAND',
                'code' => 'AYALA',
                'is_active' => true,
            ],
            [
                'name' => 'MEGAWORLD',
                'code' => 'MEGA',
                'is_active' => true,
            ],
            [
                'name' => 'ROBINSONS LAND',
                'code' => 'RLC',
                'is_active' => true,
            ],
            [
                'name' => 'FILINVEST LAND',
                'code' => 'FILINVEST',
                'is_active' => true,
            ],
            [
                'name' => 'CEBU LANDMASTERS',
                'code' => 'CLI',
                'is_active' => true,
            ],
        ]);
    }
}
