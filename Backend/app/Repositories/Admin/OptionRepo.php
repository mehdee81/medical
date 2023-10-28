<?php

namespace App\Repositories\Admin;

use App\Entities\OptionFields;
use App\Entities\QuestionFields;
use App\Handlers\Admin\OptionHandler;
use App\Models\Option;
use App\Models\Question;
use App\Repositories\Admin\Contracts\OptionInterface;

class OptionRepo implements OptionInterface
{

    public function add($request)
    {
        $option = Option::create([
            OptionFields::INDEX->value => $request->index ,
            OptionFields::QUESTION_ID->value => Question::where(QuestionFields::ID->value , $request->question)->first()->id
        ]);

        return (new OptionHandler())->add($option);
    }

    public function update($request)
    {
        $option = Option::where(OptionFields::ID->value , $request->id)->update([
            OptionFields::INDEX->value => $request->index ,
            OptionFields::QUESTION_ID->value => Question::where(QuestionFields::ID->value , $request->question)->first()->id
        ]);

        return (new OptionHandler())->update($option);
    }

    public function delete($id)
    {
        $option = Option::where(OptionFields::ID->value , $id)->delete();
        return (new OptionHandler())->delete($option);
    }

    public function getAll()
    {
        return Option::all();
    }

    public function get($id)
    {
        return Option::find($id);
    }
}
