<div class="border-b-2 border-secondary py-8">
    <div class="flex gap-4 items-center justify-between">
        <p class="text-xl">{{ $question }}</p>
        @if(!$showAnswer && !$cardAnswerRevealed)
            <button class="rounded px-2 py-2 text-background bg-secondary flex-shrink-0" wire:click="revealAnswer">
                Show answer
            </button>
        @endif
    </div>

    @if($showAnswer || $cardAnswerRevealed)
        <p class="mt-4 text-secondary text-2xl">{{ $answer }}</p>
    @endif
</div>
