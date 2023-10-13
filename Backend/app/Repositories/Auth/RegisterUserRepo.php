<?php

namespace App\Repositories\Auth;

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
            'name' => $request->name ,
            'family' => $request->family ,
            'age' => $request->age  ,
            'national_code' => $request->national_code ,
            'province_id' => Province::where('name' , $request->province)->first()->id ,
            'city_id' => City::where('name' , $request->city)->first()->id ,
            'father_name' => $request->father_name ,
            'password' => Hash::make($request->password) ,
            'role' => UserRole::PATIENT
        ]);

        return new RegisterUserHandler($user);
    }
}
