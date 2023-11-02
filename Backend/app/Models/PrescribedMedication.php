<?php

namespace App\Models;

use App\Entities\DiseaseFields;
use App\Entities\PrescribedMedicationFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescribedMedication extends Model
{
    use HasFactory;

    protected $fillable = [
        PrescribedMedicationFields::PRESCRIPTION_ID->value ,
        PrescribedMedicationFields::DISEASE_ID->value
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class ,
            PrescribedMedicationFields::DISEASE_ID->value , DiseaseFields::ID->value);
    }
}
