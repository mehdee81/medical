<?php

namespace App\Repositories\Auth\Contracts;

interface GetUserForLoginInterface
{
    public function user($request);
}
