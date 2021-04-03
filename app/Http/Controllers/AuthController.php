<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        
        $credentials = $request->all(['email', 'password']);

        //autenticação email e senha
        $token = auth('api')->attempt($credentials);

        if ($token) {
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['erro' => 'Usuário ou senha inválida!'], 403);
        }
    }

    public function logout() {
        return 'logout';
    }

    public function refresh() {
        return 'refresh';
    }

    public function me() {
        return 'me';
    }
}
