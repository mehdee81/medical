<?php

namespace App\Handlers\Auth;

class RegisterUserHandler
{
    public function __invokable($data)
    {
        if(! $data)
        {
            return response()->json([
                'error' => [
                    'message' => 'در ذخیره اطلاعات مشکلی بوجود آمده است'
                ]
            ]) ;
        }

    }
}
