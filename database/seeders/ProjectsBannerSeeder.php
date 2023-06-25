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
        ProjectsBanner::factory()
            ->hasTranslations(1, ['locale' => 'hy'])
            ->hasTranslations(1, ['locale' => 'en'])
            ->hasTranslations(1, ['locale' => 'ru'])
            ->create(['image_name' => 'banner_1.jpg']);
    }
}
