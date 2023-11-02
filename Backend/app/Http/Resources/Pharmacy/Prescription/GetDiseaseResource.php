<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetDiseaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name
        ];
    }
}
