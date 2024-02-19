<?php

return [
    'name' => 'User',
    'validation' => [
        'phone' => [
            'regex:/09([0-9])\d{8}/'
        ]
    ]
];
