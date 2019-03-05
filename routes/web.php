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



/** Frontend Route */
// Route::group(['middleware' => ['web']], function () {
    
//     /* Customer Route */

//     Route::get('/customer/login','frontend\CustomerController@getLogin');
//     Route::get('/customer/logout','frontend\CustomerController@getLogout');
//     Route::post('/customer/login','frontend\CustomerController@postLogin');

//     Route::get('/customer/register','frontend\CustomerController@getRegister');
//     Route::post('/customer/register','frontend\CustomerController@postRegister');

//     Route::get('/dashboard','frontend\DashboardController@getIndex');
    
//     /***********************/
    
//     Route::get('/', function () {
//         dd("this is for home page");
//     });

// });
/** 
 * How to Use Route Controller
 * 
 * RouteController::build('tes','TesController');
 * 
 */
 \RouteController::build('tes','TestController');

/** End Frontend Route */

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['web','auth']], function () {
//     foreach (config('admin.menu') as $config => $v) {
//         foreach ($v['menu'] as $menu => $m) {
//             /* looping admin route */
//             foreach ($m['admin-route'] as $route => $r) {
//                 if (count($r)) {
//                     foreach ($r as $method) {
//                         Route::$route('/'.$menu.'/'.$method.'/{param?}', $m['controller'].'@'.$route.ucfirst($method))->middleware('admin.permision')->where('param', '.*');               
//                     }
//                 }
//             }
//             /* looping free route */
//             foreach ($m['free-route'] as $route => $r) {
//                 if (count($r)) {
//                     foreach ($r as $method) {
//                         Route::$route('/'.$menu.'/'.$method.'/{param?}', $m['controller'].'@'.$route.ucfirst($method))->where('param', '.*');               
//                     }
//                 }
//             }
//         }  
//     }
    
// });



