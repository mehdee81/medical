<?php

namespace App\Handlers\Pharmacy;

class DeliveryHandler
{

    public function delivery($data)
    {
        if(!$data)
        {
            return [
                'error' => [
                    'message' => 'delivery failed'
                ]
            ];
        }

        return [
            'success' => [
                'message' => 'delivery sucessfuly'
            ]
        ];
    }
}
