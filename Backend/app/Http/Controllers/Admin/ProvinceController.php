<?php

namespace App\Http\Controllers\Admin;

use App\Entities\ProvinceFileds;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProvinceRequest;
use App\Http\Resources\GetProvincesResource;
use App\Models\Province;
use App\Repositories\Admin\ProvinceRepo;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function add(AddProvinceRequest $addProvinceRequest , ProvinceRepo $provinceRepo)
    {
        $result = $provinceRepo->add($addProvinceRequest);
        return response()->json($result);
    }

    public function delete($id , ProvinceRepo $provinceRepo)
    {
        $result = $provinceRepo->delete($id) ;
        return response()->json($result);
    }

    public function get(Request $request , ProvinceRepo $provinceRepo)
    {
        return new GetProvincesResource([
            'provinces' => $provinceRepo->get($request)
        ]);
    }
}
