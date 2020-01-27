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

Route::get('/', 'SwatchController@index');

Route::get('/gradient', 'SwatchController@create');
Route::post('/gradient', 'SwatchController@store');

Route::get('/gradient/{swatch}', 'SwatchController@show');
Route::get('/gradient/{swatch}/edit', 'SwatchController@edit');
Route::delete('/gradient/{swatch}/delete', 'SwatchController@destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function () {
    return view('test');
});

