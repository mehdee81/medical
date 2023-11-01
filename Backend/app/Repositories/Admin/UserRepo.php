<?php

namespace App\Repositories\Admin;

use App\Entities\UserFields;
use App\Enums\UserRole;
use App\Handlers\Admin\UserHandler;
use App\Models\User;
use App\Repositories\Admin\Contracts\UserInterface;

class UserRepo implements UserInterface
{

    public function changeRole($request)
    {
        $user = User::where('id' , $request->id)->update([
            UserFields::ROLE->value => $request->role
        ]);

        return (new UserHandler())->changeRole($user);
    }

    public function delete($id)
    {
        $user = User::where('id' , $id)->delete() ;

        return (new UserHandler())->delete($user);
    }

    public function getAll()
    {
        return User::where('role' , '!=' , UserRole::ADMIN->value)->get();
    }

    public function get($id)
    {
        return User::findOrFail($id);
    }

    public function getDoctors()
    {
        return User::where(UserFields::ROLE->value , UserRole::DOCTOR->value)->get() ;
    }

    public function getPatients()
    {
        return User::where(UserFields::ROLE->value , UserRole::PATIENT->value)->get() ;
    }

    public function getPharmacy()
    {
        return User::where(UserFields::ROLE->value , UserRole::PHARMACY->value)->get() ;

    }
}
