<?php

namespace App\Http\Resources\Admin\Options;

use App\Http\Resources\Admin\Questions\GetQuestionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetAllOptionResource extends JsonResource
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
            'index' => $this->index ,
        ];
    }
}
