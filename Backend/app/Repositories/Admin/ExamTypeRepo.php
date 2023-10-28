<?php

namespace App\Repositories\Admin;

use App\Entities\ExamTypeFields;
use App\Handlers\Admin\ExamTypeHandler;
use App\Models\ExamType;
use App\Repositories\Admin\Contracts\ExamTypeInterface;

class ExamTypeRepo implements ExamTypeInterface
{

    public function add($request)
    {
        $exam_type = ExamType::create([
            ExamTypeFields::NAME->value => $request->name
        ]);

        return (new ExamTypeHandler())->add($exam_type);
    }

    public function delete($id)
    {
        $exam_type = ExamType::where(ExamTypeFields::ID->value , $id)->delete() ;
        return (new ExamTypeHandler())->delete($exam_type);
    }

}
