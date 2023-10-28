<?php

namespace App\Repositories\Admin\Contracts;

interface QuestionInterface
{

    public function add($request);

    public function update($request);

    public function delete($id);

    public function getAll();

    public function get($id);

}
