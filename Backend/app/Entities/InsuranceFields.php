<?php

namespace App\Entities;

enum InsuranceFields : string
{
    case MODEL = 'insurances';

    case ID = 'id';
    case NAME = 'name';
    case PERCENTAGE = 'percentage';
}
