<?php

namespace App\Models;

use App\Entities\ExamTypeFields;
use App\Entities\OptionFields;
use App\Entities\QuestionFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        QuestionFields::NAME->value,
        QuestionFields::TYPE_ID->value
    ];

    public function options()
    {
        return $this->hasMany(Option::class , 'question_id' , 'id');
    }

    public function examType()
    {
        return $this->belongsTo(ExamType::class , QuestionFields::TYPE_ID->value , ExamTypeFields::ID->value );
    }
}
