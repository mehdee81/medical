<?php

namespace App\Handlers\Admin;

class OptionHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add option failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add option sucessfuly'
            ]
        ];
    }

    public function update($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'update option failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'update option sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete option successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'option not found'
            ]
        ];
    }
}
