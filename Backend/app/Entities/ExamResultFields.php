<?php

namespace App\Entities;

enum ExamResultFields :string
{
    case MODEL = 'exam_results';

    case ID = 'id';
    case EXAM_ID = 'exam_id';
    case RESULT = 'result';
}
