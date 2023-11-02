<?php

namespace App\Models;

use App\Entities\MedicineFields;
use App\Entities\PaymentMedicineFields;
use App\Entities\PivotPaymentMedicinesFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        PaymentMedicineFields::INITIAL_PRICE->value ,
        PaymentMedicineFields::PAYABLE_PRICE->value ,
        PaymentMedicineFields::MEDICINE_ID->value
    ];


    public function pivotPaymentMedicine()
    {
        return $this->hasMany(PivotPaymentMedicine::class ,
            PivotPaymentMedicinesFields::PAYMENT_MEDICINE_ID->value , PaymentMedicineFields::ID->value);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class ,
            PaymentMedicineFields::MEDICINE_ID->value , MedicineFields::ID->value);
    }
}
