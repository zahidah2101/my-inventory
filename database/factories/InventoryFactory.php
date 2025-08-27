<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    protected $model = \App\Models\Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ms_MY'); //Locate for Malaysia
        $races = ['Malay', 'Chinese', 'Indian', 'Others'];
        
        return [
            'name' => $faker->name(),
            'quantity' => $faker->numberBetween(1, 100),
            'price' => $faker->randomFloat(2, 1, 1000),
            'serial_no' => $faker->unique()->bothify('SN-####-????'),
            'user_id' => \App\Models\User::factory(), // Assuming you have a User factory
        ];
    }
}
