<?php

namespace App\Repositories\Admin\Contracts;

interface ProvinceInterface
{
    public function add($request);

    public function delete($id);

    public function get($request);
}
