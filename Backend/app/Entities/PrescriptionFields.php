<?php

namespace App\Entities;

enum PrescriptionFields : string
{
    case MODEL = 'prescriptions';

    case ID = 'id';
    case USER_ID = 'user_id';
    case PAYMENT_ID = 'payment_id';
    case SEEN = 'seen';
}
