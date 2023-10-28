<?php

namespace App\Models;

use App\Entities\InsuranceFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $fillable = [
        InsuranceFields::NAME->value ,
        InsuranceFields::PERCENTAGE->value
    ];
}
