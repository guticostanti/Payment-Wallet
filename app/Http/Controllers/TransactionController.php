<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getCardView()
    {
        return view('clients.cardview');
    }

    public function getTransactions()
    {
        return view('clients.transaction');
    }

    public function getSend()
    {
        return view('clients.send');
    }
}
