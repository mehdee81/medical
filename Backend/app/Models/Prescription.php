<?php

namespace App\Models;

use App\Entities\PrescriptionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        PrescriptionFields::USER_ID->value ,
        PrescriptionFields::PAYMENT_ID->value
    ];
}
