<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title() ,

            'prix' => fake()->numberBetween(150,400) ,

            'date_publication' => fake()->date() ,

            'id_author' => fake()->numberBetween(1,10) ,
        ];
    }
}
