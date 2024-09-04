<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraphs(3, true), // Generates three paragraphs
            'location' => $this->faker->city,
            'url' => $this->faker->url,
            'type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract', 'Remote']),
            'salary' => $this->faker->optional()->randomFloat(2, 30000, 120000),
            'featured' => $this->faker->boolean(10), // 10% chance to be true
            'is_active' => $this->faker->boolean(90), // 90% chance to be true
        ];
    }
}
