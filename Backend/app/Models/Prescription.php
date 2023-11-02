<?php

namespace App\Models;

use App\Entities\PaymentFields;
use App\Entities\PrescribedMedicationFields;
use App\Entities\PrescriptionFields;
use App\Entities\UserFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        PrescriptionFields::USER_ID->value ,
        PrescriptionFields::PAYMENT_ID->value
    ];

    public function user()
    {
        return $this->belongsTo(User::class , PrescriptionFields::USER_ID->value , UserFields::ID->value) ;
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class , PrescriptionFields::PAYMENT_ID->value , PaymentFields::ID->value);
    }

    public function prescribedMedication()
    {
        return $this->hasMany(PrescribedMedication::class ,
            PrescribedMedicationFields::PRESCRIPTION_ID->value , PrescriptionFields::ID->value);
    }
}
