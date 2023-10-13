<?php

namespace App\Repositories\Auth;

use App\Handlers\Records\UserNotFoundHandler;
use App\Models\User;
use App\Repositories\Auth\Contracts\GetUserForLoginInterface;
use Illuminate\Support\Facades\Hash;

class GetUserForLoginRepo implements GetUserForLoginInterface
{
    public function user($request)
    {
        $user = User::where('national_code' , $request->national_code)->first() ;

        if ($user) {
            return $user;
        }

        return new UserNotFoundHandler($user);
    }
}
