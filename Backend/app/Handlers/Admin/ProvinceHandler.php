<?php

namespace App\Handlers\Admin;

class ProvinceHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add province failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add province sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete province successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'province not found'
            ]
        ];
    }
}
