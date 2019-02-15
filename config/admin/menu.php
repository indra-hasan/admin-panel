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
            'icon'=>'user-plus',
            'menu'=> [
                'role' => [
                    'title' => 'Role Menu',
                    'controller' => 'Admin\RoleController',
                    'icon'=>'check-square-o',
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
                    'icon'=>'users',
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
        'catalog' => [
            'title'  => 'Catalog',
            'icon'=>'database',
            'menu'=> [
                'brand' => [
                    'title' => 'Brand',
                    'controller' => 'Admin\BrandController',
                    'icon'=>'check-circle',
                    'admin-route'=>[
                        'post'  => ['create','update','create'],
                        'get'   => ['index','create','update','delete','publish'],
                    ],
                    'free-route'=>[
                        'post' => [],
                        'get' => ['data'],
                    ]
                ],
                'product' => [
                    'title' => 'Product',
                    'controller' => 'Admin\ProductController',
                    'icon'=>'book',
                    'admin-route'=>[
                        'post'  => ['create','update','create'],
                        'get'   => ['index','create','update','delete','publish'],
                    ],
                    'free-route'=>[
                        'post' => [],
                        'get' => ['data'],
                    ]
                ],
            ]
        ],
    ];
?>