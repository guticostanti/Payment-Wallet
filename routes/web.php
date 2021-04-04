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
*/


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');



Route::get('/home', 'HomeController@index');


/*
return function ($options) {


    // Registration Routes...
    if ($options['register'] ?? true) {
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');
    }



    // Password Confirmation Routes...
    if ($options['confirm'] ??
        class_exists($this->prependGroupNamespace('Auth\ConfirmPasswordController'))) {
        $this->confirmPassword();
    }

    // Email Verification Routes...
    if ($options['verify'] ?? false) {
        $this->emailVerification();
    }
};
}
*/