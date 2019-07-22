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



Route::get('maintenance', function () {
    return 'maintenance';
});

/*==============================================   Dashboard Routes    ====================================================*/


Route::group(['middleware' => 'auth', 'namespace' => 'Dashboard'], function () {

    /* -- Return Home Page -- */
    Route::get('/masterServiceAdmin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/masterServiceAdmin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/masterServiceAdmin/service', 'ServiceController');

    /* -- Return Client Page -- */
    Route::resource('/masterServiceAdmin/client', 'ClientController');

    /* -- Return Message Page -- */
    Route::resource('/masterServiceAdmin/message', 'MessageController');

    /* -- Return Gallery Page -- */
    Route::resource('/masterServiceAdmin/gallery', 'GalleryController');
    Route::post('/masterServiceAdmin/upload-to-gallery', 'GalleryController@uploadImagesToGallery');

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

Route::group(['middleware' => ['Maintenance', 'Lang']], function () {

    Route::get('lang/{lang}', 'LanguageController@changeLanguage');

    /*=======   Return Home     ========*/
    Route::get('/', 'WebsitePagesController@index');

    /*=======   Return about    ========*/
    Route::get('/about', 'WebsitePagesController@about');

    /*=======   Return gallery  ========*/
    Route::get('/gallery', 'WebsitePagesController@gallery');


    /*=======   Return Contact     ========*/
    Route::get('/contact', 'WebsitePagesController@contact');
    Route::post('message', 'WebsitePagesController@message');

    /*=======   Return Service    ========*/
    Route::get('/service', 'WebsitePagesController@service');

    /*=======   Return Service Details     ========*/
    Route::get('/serviceDetails/{id}', 'WebsitePagesController@serviceDetails');


    /*=======   Return 404     ========*/
    Route::get('/404', function ()
    {
        return view('website.404');
    });

});

Route::get('/masterServiceAdmin/login', 'Auth\LoginController@loginView');

Auth::routes();



