<?php

namespace App\Http\Resources\Admin\Questions;

use App\Http\Resources\Admin\ExamType\GetExamTypeResource;
use App\Http\Resources\Admin\Options\GetAllOptionCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetAllQuestionResource extends JsonResource
{
    public static $wrap = 'questions';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'name' => $this->name ,
            'type' => new GetExamTypeResource($this->examType) ,
            'options' => new GetAllOptionCollection($this->options)
        ];
    }
}
