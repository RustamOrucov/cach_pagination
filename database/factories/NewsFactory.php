<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isActive = rand(0, 1);
        return [
            'author' => fake()->name(),
            'title' => fake()->text(10),
            'content' =>fake()->text(200),
            'active'=>$isActive,
            'urgent'=>$isActive,
        ];
    }
}
