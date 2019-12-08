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

route::get('/series','SeriesController@index')
    ->name('listar_series');
route::get('/series/create','SeriesController@create')
    ->name('form_add_serie');
route::post('/series/create','SeriesController@store');
route::delete ('/series/{id}','SeriesController@destroy');
