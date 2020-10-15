<?php

namespace app\models;

class Task extends AppModel
{

    public $attributes = [
        'username' => '',
        'email' => '',
        'text' => '',
        'completed' => '',
    ];

    public $rules = [
        'required' => [
            ['username'],
            ['email'],
            ['text'],
        ],
        'email' => [
            ['email'],
        ],
    ];

    
}
