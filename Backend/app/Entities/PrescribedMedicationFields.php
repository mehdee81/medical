<?php

namespace App\Entities;

enum PrescribedMedicationFields : string
{
    case MODEL = 'prescribed_medications';

    case ID = 'id';
    case PRESCRIPTION_ID = 'prescription_id';
    case DISEASE_ID = 'disease_id';
}
