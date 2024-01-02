<div class="mt-10 flex flex-col w-3/5" x-data="{ showClue: false, showAnswer: false }">
    @foreach($this->displayQuestions() as $question)
        <x-question :question="$question['question']" :answer="$question['answer']" />
    @endforeach

    <div class="mt-8 gap-4 flex flex-col items-start">
        @if($this->visibleQuestions < 4)
            <button class="rounded px-2 py-2 text-background bg-secondary" wire:click="showNextQuestion">
                Next question
            </button>
        @endif

        @if($this->visibleQuestions == 4)
            <button x-show="!showClue" class="rounded px-2 py-2 text-background bg-secondary" @click="showClue = true">
                Need a clue?
            </button>
            <p x-show="showClue" class="text-2xl">Clue: {{ $card->clue }}</p>
        @endif

        <button x-show="!showAnswer" class="rounded px-2 py-2 text-background bg-secondary" @click="showAnswer = true">
            Reveal the answer!
        </button>
        <p x-show="showAnswer" class="text-4xl">{{ $card->connection }}</p>
    </div>
</div>
