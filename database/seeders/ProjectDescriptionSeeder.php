<?php

namespace Database\Seeders;

use App\Models\ProjectDescription;
use Illuminate\Database\Seeder;

class ProjectDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectDescription::factory()->create();
    }
}
