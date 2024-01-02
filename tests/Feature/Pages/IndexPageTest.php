<?php

use App\Livewire\QuestionCard;
use App\Models\Card;
use function Pest\Laravel\get;

it('returns a successful response', function () {
    Card::factory()->create();

    get('/')->assertOk();
});

it('displays the app logo', function () {
    get('/')->assertSee('/logo.svg');
});

it('renders the question card component', function () {
    Card::factory()->create();

    get('/')->assertSeeLivewire(QuestionCard::class);
});
