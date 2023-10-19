<?php

namespace App\Enums;

enum UserRole : string
{
    case DOCTOR = 'DOCTOR' ;
    case ADMIN = 'admin' ;
    case PATIENT = 'patient' ;
    case PHARMACY = 'pharmacy' ;
}
