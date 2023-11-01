<?php

namespace App\Enums;

enum UserRole : string
{
    case DOCTOR = 'doctor' ;
    case ADMIN = 'admin' ;
    case PATIENT = 'patient' ;
    case PHARMACY = 'pharmacy' ;
}
