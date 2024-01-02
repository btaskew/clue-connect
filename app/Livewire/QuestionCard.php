<?php

namespace App\Livewire;

use App\Models\Card;
use Livewire\Component;

class QuestionCard extends Component
{
    public Card $card;

    public function mount()
    {
        $this->card = Card::first();
    }

    public function render()
    {
        return view('livewire.question-card');
    }
}
