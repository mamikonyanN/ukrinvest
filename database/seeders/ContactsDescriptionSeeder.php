<?php

namespace Database\Seeders;

use App\Models\ContactsDescription;
use Illuminate\Database\Seeder;

class ContactsDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactsDescription::factory()->create();
    }
}
