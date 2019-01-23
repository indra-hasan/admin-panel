<?php 

    /* ***************************************************************************** */
    // 
    //  config for generate admin panel menu
    //
    //
    /* ***************************************************************************** */

    return [        
        'user' => [
            'title' => 'User Menu',
            'parent' => null,
            'controller' => 'Admin\UserController',
            'route' => ['index','create','update','delete','publish']
        ],
        'role' => [
            'title' => 'Role Menu',
            'parent' => null,
            'controller' => 'Admin\RoleController',
            'route' => ['index','create','update','delete','publish']
        ],
    ];
?>