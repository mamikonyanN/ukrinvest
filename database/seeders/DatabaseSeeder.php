<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutDescription;
use App\Models\CarouselElement;
use App\Models\ContactsDescription;
use App\Models\MissionDescription;
use App\Models\News;
use App\Models\Press;
use App\Models\Project;
use App\Models\ProjectDescription;
use App\Models\ProjectsBanner;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        CarouselElement::factory()->create(['image_name' => 'home_1.jpg']);
        CarouselElement::factory()->create(['image_name' => 'home_2.jpg']);
        CarouselElement::factory()->create(['image_name' => 'home_3.jpg']);

        MissionDescription::factory()->create();

        Service::factory()->create(['title' => 'Road signs', 'image_name' => 'service_1.jpg', 'icon_name' => 'service_1_i.png']);
        Service::factory()->create(['title' => 'Road marks', 'image_name' => 'service_2.jpg', 'icon_name' => 'service_2_i.png']);
        Service::factory()->create(['title' => 'Equipment', 'image_name' => 'service_3.jpg', 'icon_name' => 'service_3_i.png']);
        Service::factory()->create(['title' => 'Traffic lights', 'image_name' => 'service_4.jpg', 'icon_name' => 'service_4_i.png']);

        ProjectDescription::factory()->create();

        Project::factory()->create(['image_name' => 'project_1.jpg']);
        Project::factory()->create(['image_name' => 'project_2.jpg']);
        Project::factory()->create(['image_name' => 'project_3.jpg']);
        Project::factory()->create(['image_name' => 'project_4.jpg']);
        Project::factory()->create(['image_name' => 'project_5.jpg']);

        Press::factory(25)->create();

        News::factory()->create(['image_name' => 'news_1.jpg']);
        News::factory()->create(['image_name' => 'news_2.jpg']);
        News::factory()->create(['image_name' => 'news_3.jpg']);
        News::factory()->create(['image_name' => 'news_4.jpg']);
        News::factory()->create(['image_name' => 'news_5.jpg']);
        News::factory()->create(['image_name' => 'news_6.jpg']);
        News::factory()->create(['image_name' => 'news_7.jpg']);
        News::factory()->create(['image_name' => 'news_8.jpg']);

        ContactsDescription::factory()->create();

        ProjectsBanner::factory()->create(['image_name' => 'banner_1.jpg']);

        AboutDescription::factory()->create();

        File::copyDirectory(storage_path('app\init'), storage_path('app\public\images'));
    }
}
