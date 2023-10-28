<?php

namespace App\Models;

use App\Entities\ProvinceFileds;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;


    protected $fillable = [
        ProvinceFileds::NAME->value
    ];


    public function cities()
    {
        return $this->hasMany(City::class , 'province_id' , 'id');
    }
}
