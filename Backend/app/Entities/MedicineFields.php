<?php

namespace App\Entities;

enum MedicineFields : string
{
    case MODEL = 'medicines';

    case ID = 'id';
    case NAME = 'name';
    case IS_INSURANCE = 'is_insurance';
    case PRICE = 'price';
}
