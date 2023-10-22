<?php

namespace App\Handlers\Auth;

class InformationIncorrect
{
    public function __invokable()
    {
        return response()->json([
            'error' => [
                'message' => 'اطلاعات شما برای ورود نادرست است'
            ]
        ]) ;
    }
}
