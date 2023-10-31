<?php

namespace App\Repositories\Admin\Contracts;

interface MedicineInterface
{
    public function add($request);

    public function update($id , $request);

    public function delete($id);

    public function getAll();

    public function get($id);

}
