<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(),
            'description' => fake()->text(2000),
            'user_id' => User::where('email', 'admin@example.com')->first()?->id,
            // SELECT * FROM users WHERE email = 'admin@example.com' LIMIT 1;
        ];
    }
}
