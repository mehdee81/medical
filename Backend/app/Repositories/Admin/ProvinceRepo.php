<?php

namespace App\Repositories\Admin;

use App\Entities\ProvinceFileds;
use App\Handlers\Admin\ProvinceHandler;
use App\Models\Province;
use App\Repositories\Admin\Contracts\ProvinceInterface;

class ProvinceRepo implements ProvinceInterface
{
    public function add($request)
    {
        $province = Province::create([
            ProvinceFileds::NAME->value => $request->name
        ]);

        return (new ProvinceHandler())->add($province);
    }

    public function delete($id)
    {
        $province = Province::where(ProvinceFileds::ID->value , $id)->delete() ;
        return (new ProvinceHandler())->delete($province);
    }

    public function get($request)
    {
        return Province::all()->pluck(ProvinceFileds::NAME->value);
    }
}

