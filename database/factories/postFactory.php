<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::random(10),
            'user_id'=> 1,
            'status' => 0,
            'content' => Str::random(10),
            'district'=> Str::random(10),
            'type_of_crime' => Str::random(10),
            'image' => $this->faker->imageUrl(640, 480, 'food', true),
            'video' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
