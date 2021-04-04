<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Account;
use App\Transaction;
use App\Users;

class UserController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        $transactions = Transaction::where('user_id',$user->id)->take(5)->get();
        $acc_balance = Account::where('user_id',$user->id)->first();
        return view('clients.dashboard', compact('user', 'transactions', 'acc_balance'));
    }

    public function getProfile()
    {
        $user = Auth::user();
        $acc_balance = Account::where('user_id',$user->id)->first();
        return view('clients.profile', compact('user', 'acc_balance'));
    }
}
