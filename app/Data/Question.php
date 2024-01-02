<?php

namespace App\Data;

class Question
{
    public function __construct(
        public string $question,
        public string $answer
    ) {
    }
}
