<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Enums\UserRole ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('password');
            $table->string('national_code');
            $table->string('father_name');
            $table->integer('age');
            $table->foreignId('province_id')->constrained('provinces' , 'id')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities' , 'id')->cascadeOnDelete();
            $table->string('role')->default(UserRole::PATIENT->value);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
