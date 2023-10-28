<?php

namespace App\Handlers\Admin;

class DiseaseHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add disease failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add disease sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete disease successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'disease not found'
            ]
        ];
    }
}
