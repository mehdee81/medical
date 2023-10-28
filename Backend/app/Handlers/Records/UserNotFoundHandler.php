<?php

namespace App\Handlers\Records;

class UserNotFoundHandler
{

    public function failed($data)
    {
        if(! $data)
        {
            return [
                'error' => [
                    'message' => 'user not found'
                ]
            ] ;
        }

    }
}
