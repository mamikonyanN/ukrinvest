<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $images = ['news_1.jpg', 'news_2.jpg', 'news_3.jpg', 'news_4.jpg', 'news_5.jpg', 'news_6.jpg', 'news_7.jpg', 'news_8.jpg'];

        foreach ($images as $image) {
            News::factory()
                ->hasTranslations(1, ['locale' => 'hy'])
                ->hasTranslations(1, ['locale' => 'en'])
                ->hasTranslations(1, ['locale' => 'ru'])
                ->create(['image_name' => $image]);
        }
    }
}
