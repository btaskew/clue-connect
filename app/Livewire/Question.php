<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Question extends Component
{
    public string $question;

    public string $answer;

    public bool $showAnswer = false;

    #[Reactive]
    public bool $cardAnswerRevealed = false;

    public function revealAnswer(): void
    {
        $this->showAnswer = true;
    }

    public function render()
    {
        return view('livewire.question');
    }
}
