<?php

namespace App\Http\Controllers;

use App\Http\Resources\Exams\GetAllExamCollection;
use App\Http\Resources\Exams\GetAllExamResource;
use App\Repositories\ExamRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function create(Request $request ,  ExamRepo $examRepo)
    {
        $result = $examRepo->createExam();
        return response()->json($result);
    }

    public function saveAnswer(Request $request , ExamRepo $examRepo)
    {
        $result = $examRepo->saveAnswer($request);
        return response()->json($result);
    }

    public function getAll(ExamRepo $examRepo)
    {
        return new GetAllExamCollection($examRepo->getAll());
    }
}
