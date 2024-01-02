@props([
    'question',
    'answer'
])

<div x-data="{ showAnswer: false }" class="border-b-2 border-secondary py-8">
    <div class="flex gap-4 items-center justify-between">
        <p class="text-xl">{{ $question }}</p>
        <button x-show="!showAnswer" class="rounded px-2 py-2 text-background bg-secondary flex-shrink-0" @click="showAnswer = true">Show answer</button>
    </div>

    <p x-show="showAnswer" class="mt-4 text-secondary text-2xl">{{ $answer }}</p>
</div>
