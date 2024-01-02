<?php

namespace App\Livewire;

use App\Models\Card;
use Livewire\Attributes\Computed;
use Livewire\Component;

class QuestionCard extends Component
{
    public Card $card;

    public int $visibleQuestions = 1;

    public bool $showClue = false;

    public bool $showAnswer = false;

    public function mount()
    {
        $this->card = Card::first();
    }

    #[Computed]
    public function displayQuestions(): array
    {
        return array_slice($this->card->questions, 0, $this->visibleQuestions);
    }

    public function showNextQuestion(): void
    {
        $this->visibleQuestions++;
    }

    public function revealClue(): void
    {
        $this->showClue = true;
    }

    public function revealAnswer(): void
    {
        $this->showAnswer = true;
        $this->showClue = true;
        $this->visibleQuestions = count($this->card->questions);
    }
}
