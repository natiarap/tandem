<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**  
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komunitas>
 */
class KomunitasFactory extends Factory
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
            'title'=>fake()->sentence(),
            'created_by_id'=>User::factory(),
            'body'=>fake()->text(),
        ];
    }

     public function coworking(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_coworking' => true,
        ]);
    }
}
