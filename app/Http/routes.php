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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin','mastercontroller');

Route::get('login',[

    'uses'=> 'Admincontroller@getlogin',
    'as'=> 'admin.login',
]);

Route::post('local',[

    'uses'=> 'Admincontroller@postlogin',
    'as'=> 'layout.master'

]);


Route::auth();

Route::get('/home', 'HomeController@index');
