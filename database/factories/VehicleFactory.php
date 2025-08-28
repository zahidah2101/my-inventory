<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    protected $model = \App\Models\Vehicle::class;
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
            'model' => $faker->word(),
            'brand' => $faker->word(),
            'color' => $faker->word(),
            'license_plate' => $faker->unique()->bothify('??-###-??'),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id ?? \App\Models\User::factory(), // Assuming you have a User factory
        ];
    }
}
