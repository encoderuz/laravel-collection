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
            'title' => $this->faker->text(155),
            'description' => $this->faker->text(300),
            'body' => $this->faker->text(),
            'slug' => $this->faker->slug(),
            'views' => $this->faker->numberBetween(0, 500000),
            'status' => $this->faker->numberBetween(0, 1)
        ];
    }
}
