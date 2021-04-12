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


/*
Route::get('/login', "UsertAuthController@getUserLogin")->name('login');
Route::get('/', function () { return redirect()->route('login'); });
Route::get('/register', 'UserAuthController@getUserRegister')->name('register');

Route::post('/register', 'UserAuthController@userRegister')->name('register');

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

Route::middleware('jwt.auth')->group(function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('home');

});
*/


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('preregister', 'preRegisterController@preRegister')->name('preregister');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');



Route::middleware('auth')->group(function() {
    Route::get('/profile', 'UserController@getProfile')->name('profile');
    Route::get('/presend', 'TransactionController@getPreSend')->name('presend');
    Route::get('/sendpf', 'TransactionController@getSendPf')->name('sendpf');
    Route::get('/sendpj', 'TransactionController@getSendPj')->name('sendpj');
    Route::post('/send', 'TransactionController@postSend')->name('send');
    Route::get('/transaction', 'TransactionController@getTransactions')->name('transaction');
});
