<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\UsersDiseasesFields ;
use \App\Entities\PrescriptionFields ;
use \App\Entities\DiseaseFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId(UsersDiseasesFields::PRESCRIPTION_ID->value)->constrained(PrescriptionFields::MODEL->value , PrescriptionFields::ID->value)->cascadeOnDelete();
            $table->foreignId(UsersDiseasesFields::DISEASE_ID->value)->constrained(DiseaseFields::MODEL->value , DiseaseFields::ID->value)->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_diseases');
    }
};
