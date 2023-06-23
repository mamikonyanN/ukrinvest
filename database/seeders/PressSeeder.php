<?php

namespace Database\Seeders;

use App\Models\Press;
use Illuminate\Database\Seeder;

class PressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Press::factory(25)->create();
    }
}
