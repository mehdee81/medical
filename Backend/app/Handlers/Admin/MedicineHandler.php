<?php

namespace App\Handlers\Admin;

class MedicineHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add medicine failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add medicine sucessfuly'
            ]
        ];
    }

    public function update($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'update medicine failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'update medicine sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete medicine successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'medicine not found'
            ]
        ];
    }
}
