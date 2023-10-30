<?php

namespace App\Http\Resources\Admin\User;

use App\Http\Resources\GetCitiesResource;
use App\Http\Resources\GetProvincesResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetAllUserCollection extends ResourceCollection
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
