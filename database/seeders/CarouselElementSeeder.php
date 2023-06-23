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
        CarouselElement::factory()->create(['image_name' => 'home_1.jpg']);
        CarouselElement::factory()->create(['image_name' => 'home_2.jpg']);
        CarouselElement::factory()->create(['image_name' => 'home_3.jpg']);
    }
}
