<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(10)->hasAttached($tags)->create(new Sequence(
            fn () => [
                "featured" => fake()->boolean(),
                "type" => fake()->randomElement(['full-time', 'part-time', 'remote']),
                "salary" => $this->generateSalaryRange(),
            ]
        ));
    }



    private function generateSalaryRange(): string
    {
        $min = fake()->numberBetween(50000, 90000);
        $max = fake()->numberBetween($min + 5000, $min + 20000); // Ensure the max is always greater than min
        return sprintf('$%s - $%s', number_format($min), number_format($max));
    }

}
