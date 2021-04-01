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



Route::get('/login', "ClientAuthController@getClientLogin")->name('login');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/register', 'ClientAuthController@getClientRegister')->name('register');

Route::post('/register', 'ClientAuthController@clientRegister')->name('register');