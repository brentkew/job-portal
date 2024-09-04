<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl(100, 100, 'business', true, 'Faker'), // Generates a fake image URL for logo
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'company_name' => $this->faker->company,
            'website' => $this->faker->url,
            'is_active' => $this->faker->boolean(90), // 90% chance to be true
        ];
    }
}
