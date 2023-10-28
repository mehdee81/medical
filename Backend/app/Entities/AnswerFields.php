<?php

namespace App\Entities;

enum AnswerFields : string
{
    case MODEL = 'answers';

    case ID = 'id';
    case EXAM_ID = 'exam_id';
    case OPTION_ID = 'option_id';
    case QUESTION_ID = 'question_id';
}
