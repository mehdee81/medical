<?php

namespace App\Repositories\Admin;

use App\Entities\DiseaseFields;
use App\Handlers\Admin\DiseaseHandler;
use App\Models\Disease;
use App\Repositories\Admin\Contracts\DiseaseInterface;

class DiseaseRepo implements DiseaseInterface
{
    public function add($request)
    {
        $disease = Disease::create([
            DiseaseFields::NAME->value => $request->name
        ]);

        return (new DiseaseHandler())->add($disease);
    }

    public function delete($id)
    {
        $disease = Disease::where(DiseaseFields::ID->value , $id)->delete();
        return (new DiseaseHandler())->delete($disease);
    }

    public function get()
    {
        return Disease::all()->pluck(DiseaseFields::NAME->value) ;
    }
}
