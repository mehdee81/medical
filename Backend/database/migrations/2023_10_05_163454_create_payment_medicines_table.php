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
        Schema::create('payment_medicines', function (Blueprint $table) {
            $table->id();
            $table->integer('initial_price');
            $table->integer('payable_price');
            $table->foreignId('payment_id')->constrained('payments' , 'id')->cascadeOnDelete();
            $table->foreignId('medicine_id')->constrained('medicines' ,'id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_medicines');
    }
};
