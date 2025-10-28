<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = fake()->city;

        return [
            'name' =>fake()->unique()->company, // Generates a unique, realistic-sounding name (e.g., 'Osinski Group')
            'city' => $city,
            'country' =>fake()->country,
            'manager_name' =>fake()->name, // Generates a full name for the manager
            'stadium_name' =>fake()->optional()->city . ' Stadium', // Makes this nullable sometimes
            'description' => fake()->paragraph()
        ];
    }
}
