<?php

namespace Database\Factories;

use App\Models\User;
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
            'titre'=>fake()->sentence(),
            'description'=>fake()->paragraph(),
            'prix'=>fake()->numberBetween(1000,10500000),
            'photo'=>"tof1.png",
            'user_id'=>fake()->numberBetween(1,User::count()),
        ];
    }
}
