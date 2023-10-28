<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\PrescriptionFields ;
use \App\Entities\UserFields ;
use \App\Entities\PaymentFields ;
use \App\Enums\PrescriptionSeen ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId(PrescriptionFields::USER_ID->value)->constrained(UserFields::MODEL->value , UserFields::ID->value)->cascadeOnDelete();
            $table->foreignId(PrescriptionFields::PAYMENT_ID->value)->constrained(PaymentFields::MODEL->value , PaymentFields::ID->value)->cascadeOnDelete();
            $table->boolean(PrescriptionFields::SEEN->value)->default(PrescriptionSeen::FALSE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
