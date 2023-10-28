<?php

namespace App\Http\Controllers\Auth;

use App\Entities\CityFields;
use App\Entities\ProvinceFileds;
use App\Entities\UserFields;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\Auth\LoginFailedResource;
use App\Http\Resources\GetCitiesResource;
use App\Http\Resources\GetProvincesResource;
use App\Models\Province;
use App\Models\User;
use App\Repositories\Auth\GetUserForLoginRepo;
use App\Repositories\Auth\RegisterUserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $registerRequest , RegisterUserRepo $registerUserRepo)
    {
        $registerUserRepo->create($registerRequest) ;
        $user = User::where(UserFields::NATIONALCODE->value, $registerRequest->national_code)->first();

        if ($user && Hash::check(\request('password'), $user->password)) {
            Auth::loginUsingId($user->id);
            return $user->createToken("token_base_{$user->id}_{$user->name}_{$user->family}")->plainTextToken;
        }

        return new LoginFailedResource([
            'error' => [
                'message' => 'login failed'
            ]
        ]);
    }

    public function login(LoginRequest $loginRequest , GetUserForLoginRepo $getUserForLoginRepo)
    {
        $user = $getUserForLoginRepo->user($loginRequest);

        if(!isset($user->password)){
            return response()->json($user);

        } elseif($user && Hash::check($loginRequest->password , $user->password))
        {
            Auth::loginUsingId($user->id);
            return $user->createToken("token_base_{$user->id}_{$user->name}_{$user->family}")->plainTextToken;
        }
    }

}
