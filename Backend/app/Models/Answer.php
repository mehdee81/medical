<?php

namespace App\Models;

use App\Entities\AnswerFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        AnswerFields::OPTION_ID->value ,
        AnswerFields::EXAM_ID->value ,
        AnswerFields::QUESTION_ID->value
    ];

    public function question()
    {
        return $this->belongsTo(Question::class , 'question_id' , "id");
    }

    public function option()
    {
        return $this->belongsTo(Option::class , 'option_id' , 'id') ;
    }
}
