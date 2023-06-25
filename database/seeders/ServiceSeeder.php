<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initialData = [
            ['title' => 'Road signs', 'image_name' => 'service_1.jpg', 'icon_name' => 'service_1_i.png'],
            ['title' => 'Road marks', 'image_name' => 'service_2.jpg', 'icon_name' => 'service_2_i.png'],
            ['title' => 'Equipment', 'image_name' => 'service_3.jpg', 'icon_name' => 'service_3_i.png'],
            ['title' => 'Traffic lights', 'image_name' => 'service_4.jpg', 'icon_name' => 'service_4_i.png'],
        ];

        foreach ($initialData as $item) {
            Service::factory()
                ->hasTranslations(1, ['title' => $item['title'], 'locale' => 'hy'])
                ->hasTranslations(1, ['title' => $item['title'], 'locale' => 'en'])
                ->hasTranslations(1, ['title' => $item['title'], 'locale' => 'ru'])
                ->create(['image_name' => $item['image_name'], 'icon_name' => $item['icon_name']]);
        }
    }
}
