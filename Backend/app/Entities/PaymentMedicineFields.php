<?php

namespace App\Entities;

enum PaymentMedicineFields : string
{
    case MODEL = 'payment_medicines';

    case ID = 'id';
    case INITIAL_PRICE = 'initial_price';
    case PAYABLE_PRICE = 'payable_price';
    case PAYMENT_ID = 'payment_id';
    case MEDICINE_ID = 'medicine_id';
    case IS_COMPLETE = 'is_complete';
}
