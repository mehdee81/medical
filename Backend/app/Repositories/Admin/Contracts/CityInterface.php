<?php

namespace App\Repositories\Admin\Contracts;

interface CityInterface
{
    public function add($request);

    public function delete($id);

    public function get($request);

}
