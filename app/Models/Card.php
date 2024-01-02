<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected function questions(): Attribute
    {
        return Attribute::make(
            get: fn () => [
                ['question' => $this->question_1, 'answer' => $this->answer_1],
                ['question' => $this->question_2, 'answer' => $this->answer_2],
                ['question' => $this->question_3, 'answer' => $this->answer_3],
                ['question' => $this->question_4, 'answer' => $this->answer_4],
            ]
        );
    }
}
