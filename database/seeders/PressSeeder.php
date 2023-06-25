<?php

namespace Database\Seeders;

use App\Models\Press;
use App\Models\PressTranslation;
use Illuminate\Database\Seeder;

class PressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Press::factory(25)
            ->hasTranslations(1, ['locale' => 'hy'])
            ->hasTranslations(1, ['locale' => 'en'])
            ->hasTranslations(1, ['locale' => 'ru'])
            ->create();
    }
}
