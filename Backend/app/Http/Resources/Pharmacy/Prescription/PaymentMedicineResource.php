<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentMedicineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'initial_price' => $this->initial_price ,
            'payable_price' => $this->payable_price ,
//            'complete' => $this->is_complete
            'medicine' => new GetMedicineResource($this->medicine)
        ];
    }
}
