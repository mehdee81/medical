<?php

namespace App\Models;

use App\Entities\PaymentFields;
use App\Entities\PaymentMedicineFields;
use App\Entities\PivotPaymentMedicinesFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPaymentMedicine extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->belongsTo(Payment::class ,
            PivotPaymentMedicinesFields::PAYMENT_ID->value , PaymentFields::ID->value);
    }
    public function paymentMedicine()
    {
        return $this->belongsTo(PaymentMedicine::class ,
            PivotPaymentMedicinesFields::PAYMENT_MEDICINE_ID->value , PaymentMedicineFields::ID->value);
    }
}
