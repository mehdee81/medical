<?php

namespace App\Http\Resources\Admin\User;

use App\Http\Resources\GetCitiesResource;
use App\Http\Resources\GetProvincesResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetAllUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'firstname' => $this->firstname ,
            'lastname' => $this->lastname ,
            'national_code' => $this->national_code ,
            'father_name' => $this->father_name,
            'age' => $this->age,
            'province' => new GetProvincesResource($this->province) ,
            'city_id' => new GetCitiesResource($this->city) ,
            'role' => $this->role ,
            'created_at' => $this->created_at ,
            'updated_at' => $this->updated_at ,
        ];
    }
}
