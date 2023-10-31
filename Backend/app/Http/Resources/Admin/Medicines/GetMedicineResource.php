<?php

namespace App\Http\Resources\Admin\Medicines;

use App\Entities\MedicineFields;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetMedicineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name ,
            'is_insurance' => $this->is_insurance,
            'price' => $this->price
        ];
    }
}
