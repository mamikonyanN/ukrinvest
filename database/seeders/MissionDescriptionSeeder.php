<?php

namespace Database\Seeders;

use App\Models\MissionDescription;
use Illuminate\Database\Seeder;

class MissionDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MissionDescription::factory()->create();
    }
}
