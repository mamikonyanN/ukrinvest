<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CarouselElementSeeder::class,
            MissionDescriptionSeeder::class,
            ServiceSeeder::class,
            ProjectDescriptionSeeder::class,
            ProjectSeeder::class,
            PressSeeder::class,
            NewsSeeder::class,
            ContactsDescriptionSeeder::class,
            ProjectsBannerSeeder::class,
            AboutDescriptionSeeder::class,
        ]);

        File::copyDirectory(storage_path('app\init'), storage_path('app\public\images'));
    }
}
