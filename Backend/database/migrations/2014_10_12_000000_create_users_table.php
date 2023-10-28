<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Enums\UserRole ;
use \App\Entities\UserFields ;
use \App\Entities\ProvinceFileds ;
use \App\Entities\CityFields ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(UserFields::FIRSTNAME->value);
            $table->string(UserFields::LASTNAME->value);
            $table->string(UserFields::PASSWORD->value);
            $table->string(UserFields::NATIONALCODE->value);
            $table->string(UserFields::FATHERNAME->value);
            $table->integer(UserFields::AGE->value);
            $table->foreignId(UserFields::PROVINCE_ID->value)->constrained(ProvinceFileds::MODEL->value , ProvinceFileds::ID->value)->cascadeOnDelete();
            $table->foreignId(UserFields::CITY_ID->value)->constrained(CityFields::MODEL->value , CityFields::ID->value)->cascadeOnDelete();
            $table->string(UserFields::ROLE->value)->default(UserRole::PATIENT->value);
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
