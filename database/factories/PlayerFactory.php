<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['Forward', 'Midfielder', 'Defender', 'Goalkeeper'];

        // A diverse list of footballing nations
        $countries = [
            'Brazil', 'Argentina', 'France', 'England', 'Germany',
            'Spain', 'Portugal', 'Netherlands', 'Italy', 'USA',
            'Mexico', 'Japan', 'South Korea', 'Senegal', 'Nigeria'
        ];

        return [

            'first_name' => fake()->firstName(),

            'last_name' => fake()->lastName(),


            'country' => fake()->randomElement($countries),


            'position' => fake()->randomElement($positions),

        ];

    }
}
