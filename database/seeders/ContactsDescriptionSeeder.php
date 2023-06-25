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
        ContactsDescription::factory()
            ->hasTranslations(1, ['locale' => 'hy'])
            ->hasTranslations(1, ['locale' => 'en'])
            ->hasTranslations(1, ['locale' => 'ru'])
            ->create();
    }
}
