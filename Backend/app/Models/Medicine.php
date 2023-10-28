<?php

namespace App\Models;

use App\Entities\MedicineFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        MedicineFields::NAME->value ,
        MedicineFields::IS_INSURANCE->value ,
        MedicineFields::PRICE->value
    ];
}
