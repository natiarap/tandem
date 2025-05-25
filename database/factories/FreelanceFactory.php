<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Freelance>
 */
class FreelanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug'=>Str::slug(fake()->sentence()),
            'name'=>fake()->name(),
            'username'=>fake()->username(),
            'freelance_id'=>User::factory(),
            'bio'=>fake()->text(),
            'desc'=>fake()->text()
        ];
    }
}
