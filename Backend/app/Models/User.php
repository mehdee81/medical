<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Entities\CityFields;
use App\Entities\ProvinceFileds;
use App\Entities\UserFields;
use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        UserFields::FIRSTNAME->value ,
        UserFields::LASTNAME->value ,
        UserFields::PASSWORD->value ,
        UserFields::NATIONALCODE->value ,
        UserFields::FATHERNAME->value ,
        UserFields::AGE->value ,
        UserFields::PROVINCE_ID->value ,
        UserFields::CITY_ID->value ,
        UserFields::ROLE->value
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => UserRole::class
    ];

    public function city()
    {
        return $this->belongsTo(City::class , UserFields::CITY_ID->value , CityFields::ID->value);
    }

    public function province()
    {
        return $this->belongsTo(Province::class , UserFields::PROVINCE_ID->value , ProvinceFileds::ID->value);
    }
}
