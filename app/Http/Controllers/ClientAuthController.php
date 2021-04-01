<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientAuthController extends Controller
{
    public function getClientLogin() {
        return view('clients.login');
    }

    public function getClientRegister() {
        return view('clients.register');
    }
}
