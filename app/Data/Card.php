<?php

namespace App\Data;

class Card
{
    public function __construct(
        public Question $question1,
        public Question $question2,
        public Question $question3,
        public Question $question4,
        public string $clue,
        public string $answer
    ) {
    }
}
