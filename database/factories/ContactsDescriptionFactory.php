<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactsDescription>
 */
class ContactsDescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'building_number' => fake()->buildingNumber(),
            'street_name' => fake()->streetName(),
            'postcode' => fake()->postcode(),
            'city' => fake()->city(),
            'country' => fake()->country(),
        ];
    }
}
