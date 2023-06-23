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
        Service::factory()->create(['title' => 'Road signs', 'image_name' => 'service_1.jpg', 'icon_name' => 'service_1_i.png']);
        Service::factory()->create(['title' => 'Road marks', 'image_name' => 'service_2.jpg', 'icon_name' => 'service_2_i.png']);
        Service::factory()->create(['title' => 'Equipment', 'image_name' => 'service_3.jpg', 'icon_name' => 'service_3_i.png']);
        Service::factory()->create(['title' => 'Traffic lights', 'image_name' => 'service_4.jpg', 'icon_name' => 'service_4_i.png']);
    }
}
