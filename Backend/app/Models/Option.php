<?php

namespace App\Models;

use App\Entities\OptionFields;
use App\Entities\QuestionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;


    protected $fillable = [
//        OptionFields::NAME->value ,
        OptionFields::QUESTION_ID->value ,
        OptionFields::INDEX->value
    ];


    public function question()
    {
        return $this->belongsTo(Question::class , OptionFields::QUESTION_ID->value , QuestionFields::ID->value);
    }
}
