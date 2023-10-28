<?php

namespace App\Entities;

enum ExamFields :string
{
    case MODEL = 'exams';

    case ID = 'id';
    case USER_ID = 'user_id';
    case TYPE = 'type';
}
