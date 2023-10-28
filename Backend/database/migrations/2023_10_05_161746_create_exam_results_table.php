<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\ExamResultFields ;
use \App\Entities\ExamFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId(ExamResultFields::EXAM_ID->value)->constrained(ExamFields::MODEL->value , ExamFields::ID->value)->cascadeOnDelete();
            $table->integer(ExamResultFields::RESULT->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
