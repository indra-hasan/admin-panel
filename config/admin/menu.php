<?php 

    /* ***************************************************************************** */
    // 
    //  config for generate admin panel menu
    //
    //
    /* ***************************************************************************** */

    return [        
        //admin master menu
        'admin-master' => [
            'title'  => 'Admin Master',
            'icon'=>'dashboard',
            'menu'=> [
                'role' => [
                    'title' => 'Role Menu',
                    'controller' => 'Admin\RoleController',
                    'icon'=>'calendar',
                    'admin-route'=>[
                        'post'  => ['create','update','create'],
                        'get'   => ['index','create','update','delete','publis'],
                    ],
                    'free-route'=>[
                        'post' => [],
                        'get' => [],
                    ]
                ],
                'user' => [
                    'title' => 'User Menu',
                    'controller' => 'Admin\UserController',
                    'icon'=>'calendar',
                    'admin-route'=>[
                        'post'  => ['create','update','create'],
                        'get'   => ['index','create','update','delete','publis'],
                    ],
                    'free-route'=>[
                        'post' => [],
                        'get' => ['category'],
                    ]
                ],
            ]
        ],        
    ];
?>