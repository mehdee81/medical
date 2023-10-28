<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddExamTypeRequest;
use App\Http\Resources\Admin\ExamType\GetAllExamTypeCollection;
use App\Repositories\Admin\ExamTypeRepo;

class ExamTypeController extends Controller
{
    public function add(AddExamTypeRequest $addExamTypeRequest , ExamTypeRepo $examTypeRepo)
    {
        $result = $examTypeRepo->add($addExamTypeRequest);
        return response()->json($result);
    }

    public function delete($id , ExamTypeRepo $examTypeRepo)
    {
        $result = $examTypeRepo->delete($id);
        return response()->json($result);
    }

}
