<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetPivotPaymentMedicineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return new PaymentMedicineResource($this->paymentMedicine);
    }
}
