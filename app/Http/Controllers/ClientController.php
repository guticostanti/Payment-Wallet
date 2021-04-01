<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function dashboard() {
        return view('clients.dashboard');
    }

    public function getProfile()
    {
        return view('clients.profile');
    }
}
