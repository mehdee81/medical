<?php

namespace App\Models;

use App\Entities\PaymentFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        PaymentFields::TOTAL_PRICE->value ,
        PaymentFields::TRACKING_CODE->value
    ];
}
