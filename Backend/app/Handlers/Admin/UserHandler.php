<?php

namespace App\Handlers\Admin;

class UserHandler
{

    public function changeRole($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'update role failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'update role sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete user successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'user not found'
            ]
        ];
    }
}
