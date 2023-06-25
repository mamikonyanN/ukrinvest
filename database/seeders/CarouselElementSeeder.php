<?php

namespace Database\Seeders;

use App\Models\CarouselElement;
use Illuminate\Database\Seeder;

class CarouselElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['home_1.jpg', 'home_2.jpg', 'home_3.jpg'];

        foreach ($images as $image) {
            CarouselElement::factory()
                ->hasTranslations(1, ['locale' => 'hy'])
                ->hasTranslations(1, ['locale' => 'en'])
                ->hasTranslations(1, ['locale' => 'ru'])
                ->create(['image_name' => $image]);
        }
    }
}
