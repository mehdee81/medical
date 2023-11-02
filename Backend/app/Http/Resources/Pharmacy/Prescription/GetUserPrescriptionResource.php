<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetUserPrescriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'user' => new GetUserResource($this->user) ,
            'payment' => new PaymentResource($this->payment) ,
            'user_disease' => new GetPrescribedMedicationCollection($this->prescribedMedication) ,
        ];
    }
}
