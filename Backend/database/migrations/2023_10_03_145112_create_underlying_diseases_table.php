<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\UnderlyingDiseaseFields ;
use \App\Entities\UserFields ;
use \App\Entities\DiseaseFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('underlying_diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId(UnderlyingDiseaseFields::DISEASE_ID->value)->constrained(DiseaseFields::MODEL->value , DiseaseFields::ID->value)->cascadeOnDelete();
            $table->foreignId(UnderlyingDiseaseFields::USER_ID->value)->constrained(UserFields::MODEL->value , UserFields::ID->value)->cascadeOnDelete();

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
