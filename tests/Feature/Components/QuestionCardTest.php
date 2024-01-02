<?php

use App\Livewire\Question;
use App\Livewire\QuestionCard;
use App\Models\Card;

it('displays the first question component', function () {
    Card::factory()->create();

    Livewire::test(QuestionCard::class)
        ->assertSeeLivewire(Question::class);
});

it('doesnt display the final answer', function () {
    $card = Card::factory()->create();

    Livewire::test(QuestionCard::class)
        ->assertDontSeeText($card->answer);
});

it('doesnt display additional questions by default', function () {
    Card::factory()->questionCount(3)->create();

    Livewire::test(QuestionCard::class)
        ->assertCount('displayQuestions', 1);
});

it('displays a button to show the next question', function () {
    Card::factory()->questionCount(3)->create();

    Livewire::test(QuestionCard::class)
        ->assertSee('Next question');
});

it('displays the next question when asked', function () {
    Card::factory()->questionCount(3)->create();

    Livewire::test(QuestionCard::class)
        ->call('showNextQuestion')
        ->assertCount('displayQuestions', 2);
});

it('doesnt display the next button question when there are no more questions', function () {
    Card::factory()->questionCount(4)->create();

    Livewire::test(QuestionCard::class)
        ->set('visibleQuestions', 4)
        ->assertDontSee('Next question');
});

it('displays a button to reveal the clue when there are no more questions', function () {
    Card::factory()->questionCount(2)->create();

    Livewire::test(QuestionCard::class)
        ->set('visibleQuestions', 2)
        ->assertSee('Need a clue?');
});

it('doesnt display the reveal clue button while there are still questions not visible', function () {
    Card::factory()->questionCount(2)->create();

    Livewire::test(QuestionCard::class)
        ->assertDontSee('Need a clue?');
});

it('reveals the clue when asked', function () {
    $card = Card::factory()->questionCount(2)->create();

    Livewire::test(QuestionCard::class)
        ->set('visibleQuestions', 2)
        ->call('revealClue')
        ->assertSeeText($card->clue)
        ->assertDontSee('Need a clue?');
});

it('displays a button to reveal the answer', function () {
    Card::factory()->create();

    Livewire::test(QuestionCard::class)
        ->assertSee('Reveal the answer!');
});

it('reveals everything when the final answer is revealed', function () {
    $card = Card::factory()->questionCount(3)->create();

    Livewire::test(QuestionCard::class)
        ->call('revealAnswer')
        ->assertSeeText($card->clue)
        ->assertSeeText($card->answer)
        ->assertCount('displayQuestions', 3)
        ->assertDontSee('Reveal the answer!');
});
