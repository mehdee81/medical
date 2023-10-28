<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\AnswerFields ;
use \App\Entities\QuestionFields ;
use \App\Entities\OptionFields ;
use \App\Entities\ExamFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(AnswerFields::QUESTION_ID->value)->constrained(QuestionFields::MODEL->value , QuestionFields::ID->value)->cascadeOnDelete();
            $table->foreignId(AnswerFields::OPTION_ID->value)->constrained(OptionFields::MODEL->value , OptionFields::ID->value)->cascadeOnDelete();
            $table->foreignId(AnswerFields::EXAM_ID->value)->constrained(ExamFields::MODEL->value , ExamFields::ID->value)->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
