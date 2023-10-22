<?php

namespace App\Handlers\Records;

class UserNotFoundHandler
{

    public function __invokable($data)
    {
        if(! $data)
        {
            return response()->json([
                'error' => [
                    'message' => 'کاربر مورد نظر یافت نشد'
                ]
            ]) ;
        }

    }
}
