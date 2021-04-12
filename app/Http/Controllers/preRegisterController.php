<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class preRegisterController extends Controller
{
    public function preRegister() {
        return view('preregister');
    }
}
