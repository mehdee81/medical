<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Http\Resources\Admin\Questions\GetAllQuestionCollection;
use App\Http\Resources\Admin\Questions\GetAllQuestionResource;
use App\Http\Resources\Admin\Questions\GetQuestionResource;
use App\Repositories\Admin\QuestionRepo;

class QuestionController extends Controller
{
    public function add(AddQuestionRequest $addQuestionRequest , QuestionRepo $questionRepo)
    {
        $result = $questionRepo->add($addQuestionRequest);
        return response()->json($result);
    }

    public function update(UpdateQuestionRequest $updateQuestionRequest , QuestionRepo $questionRepo)
    {
        $result = $questionRepo->update($updateQuestionRequest);
        return response()->json($result);
    }

    public function delete($id , QuestionRepo $questionRepo)
    {
        $result = $questionRepo->delete($id);
        return response()->json($result);
    }

    public function getAll(QuestionRepo $questionRepo)
    {
        return new GetAllQuestionCollection($questionRepo->getAll());
    }

    public function get($id , QuestionRepo $questionRepo)
    {
        return new GetQuestionResource($questionRepo->get($id)) ;
    }

}
