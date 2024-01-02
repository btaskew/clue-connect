<div class="mt-10 flex flex-col" x-data="{ showClue: false, showAnswer: false }">
    <x-question :question="$card->question_1" :answer="$card->answer_1" />
    <x-question :question="$card->question_2" :answer="$card->answer_2" />
    <x-question :question="$card->question_3" :answer="$card->answer_3" />
    <x-question :question="$card->question_4" :answer="$card->answer_4" />

    <div class="mt-8">
        <div>
            <button x-show="!showClue" class="rounded px-2 py-2 text-background bg-secondary flex-shrink-0" @click="showClue = true">Need a clue?</button>
            <p x-show="showClue" class="text-2xl">Clue: {{ $card->clue }}</p>
        </div>

        <div class="mt-6">
            <button x-show="!showAnswer" class="rounded px-2 py-2 text-background bg-secondary flex-shrink-0" @click="showAnswer = true">Reveal the answer!</button>
            <p x-show="showAnswer" class="text-4xl">{{ $card->connection }}</p>
        </div>
    </div>
</div>
