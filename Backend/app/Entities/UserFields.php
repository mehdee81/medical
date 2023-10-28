<?php

namespace App\Entities;

enum UserFields : string
{
    case MODEL = 'users' ;
    case ID = 'id' ;
    case FIRSTNAME = 'firstname' ;
    case LASTNAME = 'lastname' ;
    case PASSWORD = 'password' ;
    case NATIONALCODE = 'national_code' ;
    case FATHERNAME = 'father_name' ;
    case AGE = 'age' ;
    case PROVINCE_ID = 'province_id' ;
    case CITY_ID = 'city_id' ;
    case ROLE = 'role' ;

}
