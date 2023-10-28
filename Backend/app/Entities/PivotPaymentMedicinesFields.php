<?php

namespace App\Entities;

enum PivotPaymentMedicinesFields : string
{
    case MODEL = 'pivot_payment_medicines';

    case ID = 'id';
    case PAYMENT_ID = 'payment_id';
    case PAYMENT_MEDICINE_ID = 'payment_medicine_id';
}
