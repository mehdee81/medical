<?php

namespace App\Repositories\Admin;

use App\Entities\InsuranceFields;
use App\Handlers\Admin\InsuranceHandler;
use App\Models\Insurance;
use App\Repositories\Admin\Contracts\InsuranceInterface;

class InsuranceRepo implements InsuranceInterface
{

    public function add($request)
    {
        $insurance = Insurance::create([
            InsuranceFields::NAME->value => $request->name ,
            InsuranceFields::PERCENTAGE->value => $request->percentage
        ]);

        return (new InsuranceHandler())->add($insurance);
    }

    public function delete($id)
    {
        $insurance = Insurance::where(InsuranceFields::ID->value , $id)->delete();
        return (new InsuranceHandler())->delete($insurance);
    }

    public function get()
    {
        return Insurance::all()->pluck(InsuranceFields::NAME->value);
    }
}
