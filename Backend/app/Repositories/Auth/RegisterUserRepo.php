<?php

namespace App\Repositories\Auth;

use App\Entities\UserFields;
use App\Enums\UserRole;
use App\Handlers\Auth\RegisterUserHandler;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Repositories\Auth\Contracts\RegisterUserInterface;

use Illuminate\Support\Facades\Hash;

class RegisterUserRepo implements RegisterUserInterface
{
    public function create($request)
    {
        $user = User::create([
            UserFields::FIRSTNAME->value => $request->firstname ,
            UserFields::LASTNAME->value => $request->lastname ,
            UserFields::AGE->value => $request->age  ,
            UserFields::NATIONALCODE->value => $request->national_code ,
            UserFields::PROVINCE_ID->value => Province::where('name' , $request->province)->first()->id ,
            UserFields::CITY_ID->value => City::where('name' , $request->city)->first()->id ,
            UserFields::FATHERNAME->value => $request->father_name ,
            UserFields::PASSWORD->value => Hash::make($request->password) ,
            UserFields::ROLE->value => UserRole::PATIENT
        ]);

        return new RegisterUserHandler($user);
    }
}
