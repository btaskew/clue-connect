<?php

use App\Models\Card;

it('can return the list of questions', function () {
    $card = Card::factory()->create();

    expect($card->questions)
        ->toBe([
            ['question' => $card->question_1, 'answer' => $card->answer_1],
            ['question' => $card->question_2, 'answer' => $card->answer_2],
            ['question' => $card->question_3, 'answer' => $card->answer_3],
            ['question' => $card->question_4, 'answer' => $card->answer_4],
        ]);
});
