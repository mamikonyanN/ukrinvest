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
        $images = ['project_1.jpg', 'project_2.jpg', 'project_3.jpg', 'project_4.jpg', 'project_5.jpg'];

        foreach ($images as $image) {
            Project::factory()
                ->hasTranslations(1, ['locale' => 'hy'])
                ->hasTranslations(1, ['locale' => 'en'])
                ->hasTranslations(1, ['locale' => 'ru'])
                ->create(['image_name' => $image]);
        }
    }
}
