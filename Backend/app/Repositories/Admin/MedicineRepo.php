<?php

namespace App\Repositories\Admin;

use App\Entities\MedicineFields;
use App\Handlers\Admin\MedicineHandler;
use App\Models\Medicine;
use App\Repositories\Admin\Contracts\MedicineInterface;

class MedicineRepo implements MedicineInterface
{
    public function add($request)
    {
        $medicine = Medicine::create([
            MedicineFields::NAME->value => $request->name ,
            MedicineFields::IS_INSURANCE->value => $request->is_insurance ,
            MedicineFields::PRICE->value => $request->price
        ]);

        return (new MedicineHandler())->add($medicine);
    }

    public function update($id , $request)
    {
        $medicine = Medicine::where(MedicineFields::ID->value , $id)->update([
            MedicineFields::NAME->value => $request->name ,
            MedicineFields::IS_INSURANCE->value => $request->is_insurance ,
            MedicineFields::PRICE->value => $request->price
        ]);

        return (new MedicineHandler())->update($medicine);
    }

    public function delete($id)
    {
        $medicine = Medicine::where(MedicineFields::ID->value , $id)->delete() ;
        return (new MedicineHandler())->delete($medicine);
    }

    public function getAll()
    {
        return Medicine::all() ;
    }

    public function get($id)
    {
        return Medicine::find($id);
    }
}
