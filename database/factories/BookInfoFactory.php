<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookInfo>
 */
class BookInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => Str::title($this->faker->words($this->faker->numberBetween(1,3), true)),
            'author' => $this->faker->name(),
            'price' => $this->faker->randomNumber(5, true),
            'description' => $this->faker->paragraphs(2, true)
        ];
    }
}
