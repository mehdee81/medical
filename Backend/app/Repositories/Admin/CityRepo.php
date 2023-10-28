<?php

namespace App\Repositories\Admin;

use App\Entities\CityFields;
use App\Entities\ProvinceFileds;
use App\Handlers\Admin\CityHandler;
use App\Models\City;
use App\Models\Province;
use App\Repositories\Admin\Contracts\CityInterface;

class CityRepo implements CityInterface
{
    public function add($request)
    {
        $city = City::create([
            CityFields::NAME->value => $request->name ,
            CityFields::PROVINCE_ID->value => Province::where(ProvinceFileds::NAME->value , $request->province)->first()->id
        ]);

        return (new CityHandler())->add($city) ;
    }

    public function delete($id)
    {
        $city = City::where(CityFields::ID->value , $id)->delete() ;
        return (new CityHandler())->delete($city);
    }

    public function get($request)
    {
        return Province::where(ProvinceFileds::NAME->value , $request->province)
            ->first()->cities->pluck(CityFields::NAME->value);
    }

}

