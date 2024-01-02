<?php

namespace App\Livewire;

use App\Models\Card;
use Livewire\Component;

class QuestionCard extends Component
{
    public Card $card;

    public int $visibleQuestions = 1;

    public function mount()
    {
        $this->card = Card::first();
    }

    public function displayQuestions(): array
    {
        return array_slice($this->card->questions, 0, $this->visibleQuestions);
    }

    public function showNextQuestion(): void
    {
        $this->visibleQuestions++;
    }

    public function render()
    {
        return view('livewire.question-card');
    }
}
