<?php

namespace App\Models;

use App\Entities\PaymentMedicineFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        PaymentMedicineFields::INITIAL_PRICE->value ,
        PaymentMedicineFields::PAYABLE_PRICE->value ,
        PaymentMedicineFields::PAYMENT_ID->value ,
        PaymentMedicineFields::MEDICINE_ID->value
    ];
}
