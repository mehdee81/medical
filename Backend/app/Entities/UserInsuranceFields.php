<?php

namespace App\Entities;

enum UserInsuranceFields : string
{
    case MODEL = 'user_insurances';

    case ID = 'id';
    case CODE = 'code';
    case USER_ID = 'user_id';
    case INSURANCE_ID = 'insurance_id';
}
