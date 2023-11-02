<?php

namespace App\Repositories\Pharmacy;

use App\Entities\PaymentFields;
use App\Entities\PaymentMedicineFields;
use App\Entities\PrescriptionFields;
use App\Handlers\Pharmacy\DeliveryHandler;
use App\Models\Payment;
use App\Models\PaymentMedicine;
use App\Models\PivotPaymentMedicine;
use App\Models\Prescription;
use App\Repositories\Pharmacy\Contracts\PrescriptionInterface;

class PrescriptionRepo implements PrescriptionInterface
{
    public function getPrescription($code)
    {
        $this->seen($code);
        return Payment::where(PaymentFields::TRACKING_CODE->value , $code)->first()->prescription;
    }


    public function delivery($paymentId)
    {
        $pivotPaymentMedicines = Payment::where(PaymentFields::ID->value , $paymentId)->first()->pivotPaymentMedicine ;
        foreach ($pivotPaymentMedicines as $pivotPaymentMedicine)
        {
            PaymentMedicine::where(PaymentMedicineFields::ID->value , $pivotPaymentMedicine->payment_medicine_id)->update([
                PaymentMedicineFields::IS_COMPLETE->value => true
            ]);
        }

        return (new DeliveryHandler())->delivery($this->checkDelivery($pivotPaymentMedicines));
    }

    private function seen($code)
    {
        $prescription = Payment::where(PaymentFields::TRACKING_CODE->value , $code)->first()->prescription ;

        return Prescription::where(PrescriptionFields::ID->value , $prescription->id)->update([
            PrescriptionFields::SEEN->value => true
        ]);
    }

    private function checkDelivery($pivotPaymentMedicines)
    {
        foreach ($pivotPaymentMedicines as $pivotPaymentMedicine)
        {
            $paymentMedicine = PaymentMedicine::where(PaymentMedicineFields::ID->value , $pivotPaymentMedicine->payment_medicine_id)
                ->where(PaymentMedicineFields::IS_COMPLETE->value , true)->Exists();

            if (!$paymentMedicine)
            {
                return false ;
            }
        }

        return true ;
    }

}
