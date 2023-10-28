<?php

namespace App\Models;

use App\Entities\UsersDiseasesFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDisease extends Model
{
    use HasFactory;

    protected $fillable = [
        UsersDiseasesFields::PRESCRIPTION_ID->value ,
        UsersDiseasesFields::DISEASE_ID->value
    ];
}
