<?php

namespace App\Repositories\Contracts;

interface ExamInterface
{

    public function createExam();

    public function saveAnswer($request);

    public function getAll();

}
