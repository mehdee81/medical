<?php

namespace App\Entities;

enum UsersDiseasesFields : string
{
    case MODEL = 'users_diseases';

    case ID = 'id';
    case PRESCRIPTION_ID = 'prescription_id';
    case DISEASE_ID = 'disease_id';
}
