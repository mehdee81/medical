<?php

namespace App\Models;

use App\Entities\DiseaseFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        DiseaseFields::NAME->value
    ];
}
