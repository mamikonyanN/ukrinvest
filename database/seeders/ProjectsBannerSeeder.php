<?php

namespace Database\Seeders;

use App\Models\ProjectsBanner;
use Illuminate\Database\Seeder;

class ProjectsBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectsBanner::factory()->create(['image_name' => 'banner_1.jpg']);
    }
}
