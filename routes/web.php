<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('contacts', 'ContactController');
//
//新增一個users api
Route::get('/users', 'UserController@listAction');

Route::get('/users/{id}', 'UserController@showAction');





// Route::apiResource('contacts', 'ContactController');

//


