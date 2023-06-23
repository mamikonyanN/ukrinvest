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
        News::factory()->create(['image_name' => 'news_1.jpg']);
        News::factory()->create(['image_name' => 'news_2.jpg']);
        News::factory()->create(['image_name' => 'news_3.jpg']);
        News::factory()->create(['image_name' => 'news_4.jpg']);
        News::factory()->create(['image_name' => 'news_5.jpg']);
        News::factory()->create(['image_name' => 'news_6.jpg']);
        News::factory()->create(['image_name' => 'news_7.jpg']);
        News::factory()->create(['image_name' => 'news_8.jpg']);
    }
}
