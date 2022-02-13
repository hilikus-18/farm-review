<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => '記事タイトル',
            'text' => $this->faker->text,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
