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
        Schema::create('user_insurances', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('user_id')->constrained('users' , 'id')->cascadeOnDelete();
            $table->foreignId('insurance_id')->constrained('insurances' , 'id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_insurances');
    }
};
