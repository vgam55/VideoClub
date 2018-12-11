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

Route::get('/', 'HomeController@index');

/*Route::get('login', function () {
    return 'login usuario';
});

Route::get('logout', function () {
    return 'logout usuario';
});*/


Route::group(['middleware'=>'auth'],function(){
	Route::get('catalog', 'CatalogController@getIndex');

	Route::get('catalog/show/{id}', 'CatalogController@getShow');

	Route::get('catalog/create', 'CatalogController@getCreate');

	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

	Route::post('catalog/create', 'CatalogController@postCreate');

	Route::post('catalog/edit/{id}', 'CatalogController@putEdit');
});
Auth::routes();

Route::get('/home', 'HomeController@getHome')->name('catalog');


