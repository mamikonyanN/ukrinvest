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
        AboutDescription::factory()->create();
    }
}
