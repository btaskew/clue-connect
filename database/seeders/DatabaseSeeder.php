<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Card::create([
            'question_1' => 'Which flower is the symbol of Marie Curie Cancer Care?',
            'answer_1' => 'Daffodil',
            'question_2' => 'Name the doomed attack by the British cavalry during the Crimean war',
            'answer_2' => 'Charge of the Light Brigade',
            'question_3' => 'In Judith Kerr\'s famous kid\'s book, who came to tea?',
            'answer_3' => 'The Tiger',
            'question_4' => 'We can\'t think of a clever question for this clue, so what are the 9th and 6th letters of the alphabet?',
            'answer_4' => 'If',
            'clue' => 'They don\'t have to rhyme',
            'connection' => 'Poems',
        ]);
    }
}
