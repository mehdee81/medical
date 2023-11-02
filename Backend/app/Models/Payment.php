<?php

namespace App\Models;

use App\Entities\PaymentFields;
use App\Entities\PaymentMedicineFields;
use App\Entities\PivotPaymentMedicinesFields;
use App\Entities\PrescriptionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        PaymentFields::TOTAL_PRICE->value ,
        PaymentFields::TRACKING_CODE->value
    ];

    public function prescription()
    {
        return $this->hasOne(Prescription::class , PrescriptionFields::PAYMENT_ID->value
            , PaymentFields::ID->value);
    }

    public function pivotPaymentMedicine()
    {
        return $this->hasMany(PivotPaymentMedicine::class ,
            PivotPaymentMedicinesFields::PAYMENT_ID->value , PaymentFields::ID->value);
    }
}
