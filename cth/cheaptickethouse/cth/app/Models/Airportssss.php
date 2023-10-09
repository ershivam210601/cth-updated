<?php

namespace App\Models;

class Airport 
{
    protected $table = 'airport';
    public static function all() {
       
        return [
            [
                'id' => 1,
                'name' =>'New Delhi'
            ],
            [
                'id' => 1,
                'name' =>'California'
            ]
        ];
    }
}
