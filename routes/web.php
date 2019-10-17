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

Route::get('/', 'HomeController@getHome');

Auth::routes();




Route::group(['middleware' => 'auth'], function(){

    Route::get('/catalog', 'CatalogController@getIndex');
    
    Route::get('/catalog/show/{id}', 'CatalogController@getShow');    
    
    Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
    
    Route::get('/catalog/create', 'CatalogController@getCreate');
    
    Route::post('/catalog/store', 'CatalogController@store');
    
    Route::get('/catalog/update/{id}', 'CatalogController@update');

});


