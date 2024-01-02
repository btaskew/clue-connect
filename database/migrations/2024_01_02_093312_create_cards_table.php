<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('question_1');
            $table->string('answer_1');
            $table->string('question_2');
            $table->string('answer_2');
            $table->string('question_3');
            $table->string('answer_3');
            $table->string('question_4');
            $table->string('answer_4');
            $table->string('clue');
            $table->string('connection');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
