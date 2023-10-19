<?php

namespace App\Http\Controllers\Auth;

use App\Handlers\Auth\InformationIncorrect;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\Auth\LoginFailedResource;
use App\Http\Resources\Auth\RegisterResource;
use App\Http\Resources\GetCitiesCollection;
use App\Http\Resources\GetCitiesResource;
use App\Http\Resources\GetProvincesResource;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Repositories\Auth\GetUserForLoginRepo;
use App\Repositories\Auth\RegisterUserRepo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $registerRequest , RegisterUserRepo $registerUserRepo)
    {
        $registerUserRepo->create($registerRequest);
        $user = User::where('national_code', $registerRequest->national_code)->first();

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

        if($user && Hash::check(\request('password') , $user->password))
        {
            Auth::loginUsingId($user->id);
            return $user->createToken("token_base_{$user->id}_{$user->name}_{$user->family}")->plainTextToken;
        }

        return new LoginFailedResource([
            'error' => [
                'message' => 'login failed'
            ]
        ]);
    }

    public function getProvinces()
    {
        return new GetProvincesResource([
            'provinces' => Province::all()->pluck('name')
        ]);
    }

    public function getCities(Request $request)
    {
        return new GetCitiesResource([
            'cities' => Province::where('name' , $request->province)->first()->cities->pluck('name')
        ]);
    }
}
