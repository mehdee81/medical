<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\OptionFields ;
use \App\Entities\QuestionFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
//            $table->string(OptionFields::NAME->value);
            $table->integer(OptionFields::INDEX->value);
            $table->foreignId(OptionFields::QUESTION_ID->value)->constrained(QuestionFields::MODEL->value , QuestionFields::ID->value)->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
