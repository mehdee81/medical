<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\PrescribedMedicationFields ;
use \App\Entities\PrescriptionFields ;
use \App\Entities\MedicineFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prescribed_medications', function (Blueprint $table) {
            $table->id();
            $table->foreignId(PrescribedMedicationFields::PRESCRIPTION_ID->value)->constrained(PrescriptionFields::MODEL->value , PrescriptionFields::ID->value)->cascadeOnDelete();
            $table->foreignId(PrescribedMedicationFields::DISEASE_ID->value)->constrained(MedicineFields::MODEL->value , MedicineFields::ID->value)->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescribed_medications');
    }
};
