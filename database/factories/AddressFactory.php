<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_type' => fake()->citySuffix(),
            'city' => fake()->city(),
            'street_type' => fake()->streetSuffix(),
            'street' => fake()->streetName(),
            'house_type' => 'д',
            'house' => fake()->buildingNumber(),
            'block_type' => NULL,
            'block' => NULL,
            'geo_lat' => fake()->latitude(),
            'geo_lon' => fake()->longitude(),
        ];
    }
}
