<?php

namespace App\Handlers\Auth;

class InformationIncorrect
{
    public function __invokable()
    {
        return [
            'error' => [
                'message' => 'authentication failed'
            ]
        ] ;
    }
}
