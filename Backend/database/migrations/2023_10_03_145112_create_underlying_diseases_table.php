<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('underlying_diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desease_id')->constrained('diseases' , 'id')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users' , 'id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('underlying_diseases');
    }
};
