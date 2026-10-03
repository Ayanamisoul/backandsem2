<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(6),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'preview_image' => $this->faker->randomElement(['preview.jpg', 'preview_2.jpg']),
            'full_image' => $this->faker->randomElement(['full.jpeg', 'full_2.jpeg']),
            'shortDesc' => $this->faker->text(80),
            'desc' => $this->faker->paragraph(5),
        ];
    }
}