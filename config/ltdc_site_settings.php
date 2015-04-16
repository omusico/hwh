<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site Settings and Common Data
    |--------------------------------------------------------------------------
    |
    |
    */

    'package' => [
        'common_features' => [
            'Access to Wellness Inventory Portal',
            'Monthly Group Call'
        ],
        1 => [
            'package_name' => 'Starter',
            'features' => [],
            'year' => 99,
            'month' => 15,
            'initiation' => 20,
            'plan_id_base' => 'ahd_wi_1_',
            'item_id' => [
                'm' => 1,
                'y' => 2
            ]
        ],
        2 => [
            'package_name' => 'Advanced',
            'features' => [
                'Discovery Call within first 30 days',
                'Quarterly Strategy Spin Calls'
            ],
            'year' => 199,
            'month' => 25,
            'initiation' => 20,
            'plan_id_base' => 'ahd_wi_2_',
            'item_id' => [
                'm' => 3,
                'y' => 4
           ]
        ],
        3 => [
            'package_name' => 'Premium',
            'features' => [
                'Discovery Call within first 30 days',
                'Monthly  Strategy Spin Calls'
            ],
            'year' => 299,
            'month' => 35,
            'initiation' => 20,
            'plan_id_base' => 'ahd_wi_3_',
            'item_id' => [
                'm' => 5,
                'y' => 6
            ]
        ],
        4 => [
            'package_name' => 'Mega',
            'features' => [
                'Discovery Call within first 30 days',
                'Weekly  Strategy Spin Calls',
                'Two Discovery Calls per Month'
            ],
            'year' => 2999,
            'month' => 299,
            'initiation' => 20,
            'plan_id_base' => 'ahd_wi_4_',
            'item_id' => [
                'm' => 7,
                'y' => 8
            ]
        ]
    ],
];