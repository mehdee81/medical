<?php

namespace App\Handlers\Admin;

class InsuranceHandler
{

    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add insurance failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add insurance sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete insurance successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'insurance not found'
            ]
        ];
    }
}
