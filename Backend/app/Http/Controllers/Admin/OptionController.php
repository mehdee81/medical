<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use App\Http\Resources\Admin\Options\GetAllOptionCollection;
use App\Http\Resources\Admin\Options\GetOptionResource;
use App\Repositories\Admin\OptionRepo;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function add(AddOptionRequest $addOptionRequest , OptionRepo $optionRepo)
    {
        $result = $optionRepo->add($addOptionRequest);
        return response()->json($result);
    }

    public function update(UpdateOptionRequest $updateOptionRequest , OptionRepo $optionRepo)
    {
        $result = $optionRepo->update($updateOptionRequest);
        return response()->json($result);
    }

    public function delete($id , OptionRepo $optionRepo)
    {
        $result = $optionRepo->delete($id);
        return response()->json($result);
    }

    public function getAll(OptionRepo $optionRepo)
    {
        return new GetAllOptionCollection($optionRepo->getAll());
    }

    public function get($id , OptionRepo $optionRepo)
    {
        return new GetOptionResource($optionRepo->get($id));
    }
}
