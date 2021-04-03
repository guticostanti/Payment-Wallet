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
Route::get('/', function () { return redirect()->route('login'); });
Route::get('/register', 'ClientAuthController@getClientRegister')->name('register');

Route::post('/register', 'ClientAuthController@clientRegister')->name('register');

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

Route::middleware('jwt.auth')->group(function () {
    Route::get('/dashboard', 'ClientController@dashboard')->name('home');
    Route::get('/profile', 'ClientController@getProfile')->name('profile');
    Route::get('/send', 'TransactionController@getSend')->name('send');
    Route::get('/cardView', 'TransactionController@getCardView')->name('cardView');
    Route::get('/transaction', 'TransactionController@getTransactions')->name('transaction');
});

