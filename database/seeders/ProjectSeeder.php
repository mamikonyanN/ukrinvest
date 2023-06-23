<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->create(['image_name' => 'project_1.jpg']);
        Project::factory()->create(['image_name' => 'project_2.jpg']);
        Project::factory()->create(['image_name' => 'project_3.jpg']);
        Project::factory()->create(['image_name' => 'project_4.jpg']);
        Project::factory()->create(['image_name' => 'project_5.jpg']);
    }
}
