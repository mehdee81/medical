<?php

namespace App\Repositories\Pharmacy\Contracts;

interface PrescriptionInterface
{
    public function getPrescription($code);

    public function delivery($paymentId);
}
