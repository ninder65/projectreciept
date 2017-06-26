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

Route::get('/addinvoice', 'RecieptsController@index');

Route::post('/addinvoice', 'RecieptsController@store');

Route::get('/detail/{id}', 'RecieptsController@show');

Route::get('/edit/{id}' , 'RecieptsController@edit');

Route::post('/edit/{id}' , 'RecieptsController@update');

Route::get('/del/{id}' , 'RecieptsController@destroy');

//Route::post('/detail', 'RecieptsController@store');






//
//Route::get('/detail', function () {
//    return view('detail');
//});
//
//Route::get('/edit', function () {
//    return view('edit');
//});

