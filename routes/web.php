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

use App\TableOfContent;
use App\Page;

//Route::get('/docs', function () {
//    return view('layouts.documentation');
//});


Route::get('/', function () {
    return view('layouts.front');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

//Route::get('admin', 'HomeController@index')->name('admin');

Route::get('/docs', 'HomeController@docs')->name('/docs');

//Route::get('', ['as'=>'home.post' , 'uses'=>'HomeController@docs']);

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', function () {
        return view('layouts.admin');
    });

    Route::resource('content', 'AdminContentController',['names'=>[
        'index'=>'content.index',
        'create'=>'content.create',
        'store'=>'content.edit',
        'edit'=>'content.edit'
    ]]);

    Route::resource('admin/page', 'AdminPageController',['names'=>[
        'index'=>'page.index',
        'create'=>'page.create',
        'store'=>'page.edit',
        'edit'=>'page.edit'
    ]]);
});