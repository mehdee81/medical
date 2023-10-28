<?php

namespace App\Http\Resources\Exams;

use App\Entities\ExamFields;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetAllExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ExamFields::ID->value => $this->id ,
            ExamFields::USER_ID->value => $this->user_id ,
            ExamFields::TYPE->value => $this->type
        ];

    }
}
