<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\PropertyType;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::cerate([
        'developer_id' => 1,
        'name' => 'Camella Northpoint',
        'code' => 'CNP',
        'location' => 'Cebu City',
        'property_type' => PropertyType::HOUSE_AND_LOT,
        'is_active' => true,
    ]);
    }

    
}
