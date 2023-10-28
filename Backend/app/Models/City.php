<?php

namespace App\Models;

use App\Entities\CityFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $with = ['province'] ;

    protected $fillable = [
        CityFields::NAME->value ,
        CityFields::PROVINCE_ID->value
    ];


    public function province()
    {
        return $this->belongsTo(Province::class , 'province_id' , 'id');
    }
}
