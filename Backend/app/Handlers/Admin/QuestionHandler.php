<?php

namespace App\Handlers\Admin;

class QuestionHandler
{
    public function add($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'add question failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'add question sucessfuly'
            ]
        ];
    }

    public function update($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'update question failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'update question sucessfuly'
            ]
        ];
    }

    public function delete($data)
    {
        if($data)
        {
            return [
                'success' => [
                    'message' => 'delete question successfuly'
                ]
            ];
        }

        return [
            'error' => [
                'message' => 'question not found'
            ]
        ];
    }
}
