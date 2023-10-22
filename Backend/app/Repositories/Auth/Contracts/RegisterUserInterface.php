<?php

namespace App\Repositories\Auth\Contracts;

interface RegisterUserInterface
{
    public function create($request);
}
