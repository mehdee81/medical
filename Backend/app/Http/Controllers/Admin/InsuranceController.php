<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddInsuranceRequest;
use App\Http\Resources\Admin\GetAllInsuranceResource;
use App\Repositories\Admin\InsuranceRepo;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function add(AddInsuranceRequest $addInsuranceRequest , InsuranceRepo $insuranceRepo)
    {
        $result = $insuranceRepo->add($addInsuranceRequest);
        return response()->json($result);
    }

    public function delete($id , InsuranceRepo $insuranceRepo)
    {
        $result = $insuranceRepo->delete($id);
        return response()->json($result);
    }

    public function get(InsuranceRepo $insuranceRepo)
    {
        return new GetAllInsuranceResource($insuranceRepo->get());
    }
}
