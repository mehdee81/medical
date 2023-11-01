<?php

namespace App\Repositories\Admin\Contracts;

interface UserInterface
{
    public function changeRole($request);

    public function delete($id);
    public function get($id);

    public function getAll();

    public function getDoctors();

    public function getPatients();

    public function getPharmacy();
}
