<?php

namespace App\Repositories\Admin\Contracts;

interface InsuranceInterface
{
    public function add($request);

    public function delete($id);

    public function get();
}
