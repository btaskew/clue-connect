<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'question_1' => $this->faker->sentence(),
            'answer_1' => $this->faker->sentence(),
            'question_2' => $this->faker->sentence(),
            'answer_2' => $this->faker->sentence(),
            'question_3' => $this->faker->sentence(),
            'answer_3' => $this->faker->sentence(),
            'question_4' => $this->faker->sentence(),
            'answer_4' => $this->faker->sentence(),
            'clue' => $this->faker->sentence(),
            'connection' => $this->faker->word(),
        ];
    }
}
