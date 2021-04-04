<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function getUserLogin() {
        return view('clients.login');
    }

    public function getUserRegister() {
        return view('clients.register');
    }
}
