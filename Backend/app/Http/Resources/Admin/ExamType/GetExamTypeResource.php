<?php

namespace App\Http\Resources\Admin\ExamType;

use App\Entities\ExamTypeFields;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetExamTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ExamTypeFields::NAME->value => $this->name,
            ExamTypeFields::ID->value => $this->id
        ];
    }
}
