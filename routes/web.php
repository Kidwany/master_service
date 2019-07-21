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


Route::group(['middleware' => 'auth', 'namespace' => 'Dashboard'], function () {

    /* -- Return Home Page -- */
    Route::get('/masterServiceAdmin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/masterServiceAdmin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/masterServiceAdmin/service', 'ServiceController');

    /* -- Return Client Page -- */
    Route::resource('/masterServiceAdmin/client', 'ClientController');

    /*--------  About   --------*/
    Route::get('/masterServiceAdmin/about/edit', 'AboutController@edit');
    Route::patch('/masterServiceAdmin/about/update', 'AboutController@update');

    /*--------  Contact   --------*/
    Route::get('/masterServiceAdmin/contact/edit', 'ContactController@edit');
    Route::patch('/masterServiceAdmin/contact/update', 'ContactController@update');

    /*--------  Setting   --------*/
    Route::get('/masterServiceAdmin/setting/edit', 'SettingController@edit');
    Route::patch('/masterServiceAdmin/setting/update', 'SettingController@update');

});


Route::get('/masterServiceAdmin/login', 'Auth\LoginController@loginView');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
