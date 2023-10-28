<?php

namespace App\Models;

use App\Entities\ExamResultFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        ExamResultFields::EXAM_ID->value ,
        ExamResultFields::RESULT->value
    ];
}
