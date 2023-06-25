<?php

namespace Database\Seeders;

use App\Models\AboutDescription;
use Illuminate\Database\Seeder;

class AboutDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutDescription::factory()
            ->hasTranslations(1, ['locale' => 'hy'])
            ->hasTranslations(1, ['locale' => 'en'])
            ->hasTranslations(1, ['locale' => 'ru'])
            ->create();
    }
}
