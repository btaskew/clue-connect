<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'questions' => [
                [
                    'question' => $this->faker->sentence(),
                    'answer' => $this->faker->sentence(),
                ],
            ],
            'clue' => $this->faker->sentence(),
            'answer' => $this->faker->sentence(),
        ];
    }

    public function questionCount(int $count): Factory
    {
        $questions = [];

        for ($i = 1; $i <= $count; $i++) {
            $questions[] = [
                'question' => $this->faker->sentence(),
                'answer' => $this->faker->sentence(),
            ];
        }

        return $this->state(fn () => [
            'questions' => $questions,
        ]);
    }
}
