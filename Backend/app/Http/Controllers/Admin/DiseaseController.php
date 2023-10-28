<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddDiseaseRequest;
use App\Http\Resources\Admin\GetAllDiseaseResource;
use App\Repositories\Admin\DiseaseRepo;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function add(AddDiseaseRequest $addDiseaseRequest , DiseaseRepo $diseaseRepo)
    {
        $result = $diseaseRepo->add($addDiseaseRequest);
        return response()->json($result);
    }

    public function delete($id , DiseaseRepo $diseaseRepo)
    {
        $result = $diseaseRepo->delete($id) ;
        return response()->json($result);
    }

    public function get(DiseaseRepo $diseaseRepo)
    {
        return new GetAllDiseaseResource($diseaseRepo->get());
    }
}
