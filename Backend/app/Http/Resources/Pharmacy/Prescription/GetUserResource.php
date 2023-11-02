<?php

namespace App\Http\Resources\Pharmacy\Prescription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'firstname' => $this->firstname ,
            'lastname' => $this->lastname ,
            'national_code' => $this->national_code ,
            'father_name' => $this->father_name ,
            'age' => $this->age
        ];
    }
}
