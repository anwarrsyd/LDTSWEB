<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('login','HomeController@login');
Route::get('input','HomeController@input');
Route::get('list','HomeController@daftar');
Route::get('dataldts','HomeController@passdata');
Route::post('insert','HomeController@insert');
Route::get('json','HomeController@getdata');
Route::post('hapuspeserta','HomeController@delete');
Route::get('jarak/{kategori}/{lat}/{long}','HomeController@distance');
Route::post('uploaddata','HomeController@insertandroid');
Route::get('notelpon/{namalayanan}','HomeController@notelpon');
Route::get('notelpondedek/{lat}/{lng}','HomeController@notelpondedek');
Route::post('uploaddatajson/{kategori}/{namalayanan}/{alamat}/{notelpon}/{lat}/{longitude}','HomeController@insertandroidjson');