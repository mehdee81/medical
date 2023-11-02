<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\PaymentMedicineFields ;
use \App\Entities\PaymentFields ;
use \App\Entities\MedicineFields ;
use \App\Enums\PaymentMedicineComplete;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_medicines', function (Blueprint $table) {
            $table->id();
            $table->integer(PaymentMedicineFields::INITIAL_PRICE->value);
            $table->integer(PaymentMedicineFields::PAYABLE_PRICE->value);
//            $table->foreignId(PaymentMedicineFields::PAYMENT_ID->value)->constrained(PaymentFields::MODEL->value , PaymentFields::ID->value)->cascadeOnDelete();
            $table->foreignId(PaymentMedicineFields::MEDICINE_ID->value)->constrained(MedicineFields::MODEL->value , MedicineFields::ID->value)->cascadeOnDelete();
            $table->boolean(PaymentMedicineFields::IS_COMPLETE->value)->default(PaymentMedicineComplete::FALSE->value);
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
