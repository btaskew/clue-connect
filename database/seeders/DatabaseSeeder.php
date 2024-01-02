<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Card::create([
            'questions' => [
                [
                    'question' => 'Which flower is the symbol of Marie Curie Cancer Care?',
                    'answer' => 'Daffodil',
                ],
                [
                    'question' => 'Name the doomed attack by the British cavalry during the Crimean war',
                    'answer' => 'Charge of the Light Brigade',
                ],
                [
                    'question' => 'In Judith Kerr\'s famous kid\'s book, who came to tea?',
                    'answer' => 'The Tiger',
                ],
                [
                    'question' => 'We can\'t think of a clever question for this clue, so what are the 9th and 6th letters of the alphabet?',
                    'answer' => 'If',
                ],
            ],
            'clue' => 'They don\'t have to rhyme',
            'answer' => 'Poems',
        ]);
    }
}
