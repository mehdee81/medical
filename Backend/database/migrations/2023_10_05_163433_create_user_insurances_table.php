<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Entities\UserInsuranceFields;
use \App\Entities\UserFields;
use \App\Entities\InsuranceFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_insurances', function (Blueprint $table) {
            $table->id();
            $table->string(UserInsuranceFields::CODE->value);
            $table->foreignId(UserInsuranceFields::USER_ID->value)->constrained(UserFields::MODEL->value , UserFields::ID->value)->cascadeOnDelete();
            $table->foreignId(UserInsuranceFields::INSURANCE_ID->value)->constrained(InsuranceFields::MODEL->value , InsuranceFields::ID->value)->cascadeOnDelete();

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
