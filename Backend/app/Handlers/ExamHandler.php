<?php

namespace App\Handlers;

class ExamHandler
{

    public function createExam($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'create exam failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'create exam sucessfuly'
            ]
        ];
    }

    public function saveAnswer($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'save answer failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'save answer sucessfuly'
            ]
        ];
    }
}
