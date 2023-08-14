<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->unique()->slug(),
            'title' => fake()->catchPhrase(),
            'description' => fake()->paragraph(20),
            'image_path' => 'test.png',
            'category' => $this->faker->randomElement(['F1', 'F2', 'F3', 'indycar', 'nascar', 'enduranceracing']),
            'user_id' => 1,
        ];
    }
}
