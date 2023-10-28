<?php

namespace App\Models;

use App\Entities\ExamTypeFields;
use App\Entities\QuestionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    use HasFactory;


    protected $fillable = [
        ExamTypeFields::NAME->value
    ];

    public function question()
    {
        return $this->hasOne(Question::class , QuestionFields::TYPE_ID->value , ExamTypeFields::ID->value);
    }
}
