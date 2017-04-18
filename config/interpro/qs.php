<?php

return [

    'products' => [
        'string' => ['pr1', 'pr1_count', 'pr2', 'pr2_count', 'pr3', 'pr3_count', 'pr4', 'pr4_count', 'pr5', 'pr5_count'],
        'image' => ['pr1_img', 'pr2_img', 'pr3_img', 'pr4_img', 'pr5_img'],
        'file' => ['cp'],
    ],

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],

    'guarantee' => [
        'groups' => [
            'slider' => [
                'image' => ['slide'],
            ],
            'support' => [
                'string' => ['text_title'],
                'text' => ['descr'],
            ]
        ]
    ],

    'about' => [
        'groups' => [
            'facts' => [
                'image' => ['img'],
                'string' => ['text_title'],
                'text' => ['descr'],
            ]
        ]
    ],
];
