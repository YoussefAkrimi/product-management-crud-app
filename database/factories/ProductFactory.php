<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {



        // unlike jobs which is a built in provider : product does not have it
        // hadheka 3lech we use ; randomelement $productnames for realistic names
        $productNames = [
    'Laptop', 'Headphones', 'Smartphone', 'Camera',
    'Smart Watch', 'Backpack', 'Wireless Mouse',
    'Bluetooth Speaker', 'Gaming Keyboard', 'Desk Lamp',
    'Tablet', 'Monitor', 'Printer', 'Router', 'External Hard Drive',
    'Smart TV', 'Fitness Tracker', 'Drone', 'Projector', 'Microphone',
    'Electric Kettle', 'Coffee Maker', 'Air Purifier', 'Vacuum Cleaner',
    'Smart Light Bulb', 'Portable Charger', 'USB Flash Drive',
    'Noise Cancelling Earbuds', 'Wireless Charger', 'Smart Thermostat',
    'VR Headset', 'Gaming Chair', 'Desk Organizer', 'Camera Lens',
    'Graphic Tablet', 'Smart Door Lock', 'Smart Plug', 'E-Reader',
    'Streaming Stick', 'Action Camera', 'Smart Refrigerator', 'Robot Vacuum'
];

        return [
            'name' => fake()->randomElement($productNames),
            // 'company_id' => Company::factory(),
            'description' => fake()->sentence(12), // 12-word sentence
            'price' => '$' . number_format(fake()->numberBetween(1, 999999999)),

        ];
    }
}
