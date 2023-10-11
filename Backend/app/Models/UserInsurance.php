<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'code' ,
        'user_id' ,
        'insurance_id'
    ];
}
