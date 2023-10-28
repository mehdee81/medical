<?php

namespace App\Handlers\Admin;

class CityHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add city failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add city sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete city successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'city not found'
            ]
        ];
    }
}
