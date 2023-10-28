<?php

namespace App\Repositories\Admin;

use App\Entities\QuestionFields;
use App\Handlers\Admin\QuestionHandler;
use App\Http\Resources\Admin\GetAllQuestionResource;
use App\Models\Question;
use App\Repositories\Admin\Contracts\QuestionInterface;

class QuestionRepo implements QuestionInterface
{
    public function add($request)
    {
        $question = Question::create([
            QuestionFields::NAME->value => $request->name ,
            QuestionFields::TYPE_ID->value => $request->type
        ]);

        return (new QuestionHandler())->add($question);
    }

    public function update($request)
    {
        $question = Question::where(QuestionFields::ID->value , $request->id)->update([
            QuestionFields::NAME->value => $request->name ,
            QuestionFields::TYPE_ID->value => $request->type
        ]);

        return (new QuestionHandler())->update($question);
    }

    public function delete($id)
    {
        $question = Question::where(QuestionFields::ID->value , $id)->delete() ;
        return (new QuestionHandler())->delete($question);
    }

    public function getAll()
    {
        return Question::all();
    }

    public function get($id)
    {
        return Question::find($id) ;
    }
}

