<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\User\GetAllUserCollection;
use App\Http\Resources\Admin\User\GetUserResource;
use App\Repositories\Admin\UserRepo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function changeRole($id , UserRepo $userRepo , Request $request)
    {
        $result = $userRepo->changeRole($request);

        return response()->json($result);
    }

    public function getAll(UserRepo $userRepo)
    {
        return new GetAllUserCollection($userRepo->getAll()) ;
    }

    public function get($id , UserRepo $userRepo)
    {
        return new GetUserResource($userRepo->get($id));
    }

    public function delete($id , UserRepo $userRepo)
    {
        $result = $userRepo->delete($id);
        return response()->json($result);
    }

}
