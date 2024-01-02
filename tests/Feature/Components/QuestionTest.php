<?php

use App\Livewire\Question;

it('displays the question', function () {
    Livewire::test(Question::class, ['question' => 'What is Laravel?', 'answer' => 'Laravel is a PHP framework.'])
        ->assertSeeText('What is Laravel?');
});

it('doesnt display the answer by default', function () {
    Livewire::test(Question::class, ['question' => 'What is Laravel?', 'answer' => 'Laravel is a PHP framework.'])
        ->assertDontSeeText('Laravel is a PHP framework.');
});

it('displays a button to reveal the answer', function () {
    Livewire::test(Question::class, ['question' => 'What is Laravel?', 'answer' => 'Laravel is a PHP framework.'])
        ->assertSee('Show answer');
});

it('displays the answer when asked', function () {
    Livewire::test(Question::class, ['question' => 'What is Laravel?', 'answer' => 'Laravel is a PHP framework.'])
        ->call('revealAnswer')
        ->assertSee('Laravel is a PHP framework.')
        ->assertDontSee('Show answer');
});

it('displays the answer if the provided prop is true', function () {
    Livewire::test(Question::class, ['question' => 'What is Laravel?', 'answer' => 'Laravel is a PHP framework.', 'cardAnswerRevealed' => true])
        ->assertSee('Laravel is a PHP framework.')
        ->assertDontSee('Show answer');
});
