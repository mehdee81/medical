<?php

namespace App\Entities;

enum OptionFields : string
{
    case MODEL = 'options';

    case ID = 'id' ;
//    case NAME = 'name';
    case INDEX = 'index';
    case QUESTION_ID = 'question_id';
}
