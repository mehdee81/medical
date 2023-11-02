<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'payment_id' => $this->id ,
            'price' => $this->total_price ,
            'tracking_code' => $this->tracking_code ,
            'payment_medicine' => new GetPivotPaymentMedicineCollection($this->pivotPaymentMedicine)
        ];
    }
}
