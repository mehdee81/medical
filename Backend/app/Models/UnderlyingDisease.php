<?php

namespace App\Models;

use App\Entities\UnderlyingDiseaseFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderlyingDisease extends Model
{
    use HasFactory;

    protected $fillable = [
        UnderlyingDiseaseFields::DISEASE_ID->value ,
        UnderlyingDiseaseFields::USER_ID->value
    ];
}
