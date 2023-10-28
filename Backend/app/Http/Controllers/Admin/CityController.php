<?php

namespace App\Http\Controllers\Admin;

use App\Entities\CityFields;
use App\Entities\ProvinceFileds;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCityRequest;
use App\Http\Resources\GetCitiesResource;
use App\Models\Province;
use App\Repositories\Admin\CityRepo;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function add(AddCityRequest $addCityRequest , CityRepo $cityRepo)
    {
        $result = $cityRepo->add($addCityRequest);
        return response()->json($result) ;
    }

    public function delete($id , CityRepo $cityRepo)
    {
        $result = $cityRepo->delete($id);
        return response()->json($result) ;
    }

    public function get(Request $request, CityRepo $cityRepo)
    {
        return new GetCitiesResource([
            'cities' => $cityRepo->get($request)
        ]);
    }
}
