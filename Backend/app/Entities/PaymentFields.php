<?php

namespace App\Entities;

enum PaymentFields : string
{
    case MODEL = 'payments';
    case ID = 'id';
    case TOTAL_PRICE = 'total_price';
    case TRACKING_CODE = 'tracking_code';
}
