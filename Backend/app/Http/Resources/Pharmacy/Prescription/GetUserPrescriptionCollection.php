<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetUserPrescriptionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
