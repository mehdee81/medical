<?php

namespace App\Models;

use App\Entities\UserInsuranceFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        UserInsuranceFields::CODE->value ,
        UserInsuranceFields::USER_ID->value ,
        UserInsuranceFields::INSURANCE_ID->value
    ];
}
