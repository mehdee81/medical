<?php

namespace App\Handlers\Auth;

class RegisterUserHandler
{
    public function __invokable($data)
    {
        if(! $data)
        {
            return [
                'error' => [
                    'message' => 'register failed'
                ]
            ];
        }

    }
}
