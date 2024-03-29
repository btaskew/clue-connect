<div class="mt-10 flex flex-col w-3/5">
    @foreach($this->displayQuestions as $question)
        <livewire:question
            :key="$question['question']"
            :question="$question['question']"
            :answer="$question['answer']"
            :card-answer-revealed="$this->showAnswer"
        />
    @endforeach

    <div class="mt-8 gap-4 flex flex-col items-start">
        @if($this->visibleQuestions < count($this->card->questions))
            <button class="rounded px-2 py-2 text-background bg-secondary" wire:click="showNextQuestion">
                Next question
            </button>
        @else
            @if($showClue)
                <p class="text-2xl">Clue: {{ $card->clue }}</p>
            @else
                <button class="rounded px-2 py-2 text-background bg-secondary" wire:click="revealClue">
                    Need a clue?
                </button>
            @endif
        @endif

        <div class="mt-4">
            @if($this->showAnswer)
                <p class="text-5xl text-secondary">{{ $card->answer }}</p>
            @else
                <button class="text-xl rounded px-2 py-2 text-background bg-secondary" wire:click="revealAnswer">
                    Reveal the answer!
                </button>
            @endif
        </div>
    </div>
</div>
