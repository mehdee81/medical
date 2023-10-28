<?php

namespace App\Handlers\Admin;

class ExamTypeHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add exam type failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add exam type sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete exam type successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'exam type not found'
            ]
        ];
    }
}
