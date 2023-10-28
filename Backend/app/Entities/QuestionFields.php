<?php

namespace App\Entities;

enum QuestionFields :string
{
    case MODEL = 'questions';

    case ID = 'id';
    case NAME = 'name';
    case TYPE_ID = 'type_id';
}
