<?php

namespace App\Repositories\Admin\Contracts;

interface DiseaseInterface
{
    public function add($request);

    public function delete($id);

    public function get();
}
