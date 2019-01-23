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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth']], function () {
    //
    foreach (config('admin.menu') as $config => $v) {
        if(count($v['route'])) {
            foreach ($v['route'] as $route) {
                Route::get('/'.$config.'/'.$route, $v['controller'].'@get'.ucfirst($route))->middleware('admin.permision');
                if ($route == 'index') {
                    Route::get('/'.$config, $v['controller'].'@get'.ucfirst($route))->middleware('admin.permision');
                }
                Route::post('/'.$config.'/'.$route, $v['controller'].'@post'.ucfirst($route))->middleware('admin.permision');
            }
        }    
    }
    
});



