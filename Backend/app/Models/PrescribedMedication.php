<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescribedMedication extends Model
{
    use HasFactory;

    protected $fillable = [
        'prescription_id' ,
        'disease_id'
    ];
}
