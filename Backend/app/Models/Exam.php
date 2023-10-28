<?php

namespace App\Models;

use App\Entities\AnswerFields;
use App\Entities\ExamFields;
use App\Entities\OptionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        ExamFields::USER_ID->value ,
        ExamFields::TYPE->value
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class , AnswerFields::EXAM_ID->value , ExamFields::ID->value);
    }
}
