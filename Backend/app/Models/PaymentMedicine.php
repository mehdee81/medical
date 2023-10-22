<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'initial_price' ,
        'payable_price' ,
        'payment_id' ,
        'medicine_id'
    ];
}
