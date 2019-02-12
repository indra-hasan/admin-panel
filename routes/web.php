<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth']], function () {
    foreach (config('admin.menu') as $config => $v) {
        foreach ($v['menu'] as $menu => $m) {
            /* looping admin route */
            foreach ($m['admin-route'] as $route => $r) {
                if (count($r)) {
                    foreach ($r as $method) {
                        Route::$route('/'.$menu.'/'.$method, $m['controller'].'@'.$route.ucfirst($method))->middleware('admin.permision');               
                    }
                }
            }
            /* looping free route */
            foreach ($m['free-route'] as $route => $r) {
                if (count($r)) {
                    foreach ($r as $method) {
                        Route::$route('/'.$menu.'/'.$method, $m['controller'].'@'.$route.ucfirst($method));               
                    }
                }
            }
        }  
    }
    
});



