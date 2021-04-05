<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;
use App\Account;
use App\User;

class TransactionController extends Controller
{
    public function getCardView(Request $request)
    {
        return view('clients.cardview', compact('request'));
    }

    public function getTransactions()
    {
        $user = Auth::user();
        $transactions = Transaction::where('user_id',$user->id)->paginate(2);
        return view('clients.transaction', compact('user', 'transactions'));
    }

    public function getSend(Request $request)
    {
        return view('clients.send', compact('request'));
    }

    public function postSend(Request $request) {
        $user = Auth::user();
        $sender_account = Account::where('user_id',$client->id)->first();
        $balance = $sender_account->balance;
        $balance = (float)$balance;

        $amount = $request->input('amount');
        $amount = (float)$amount;
        $remaining_balance = $balance - $amount;

        if($remaining_balance > 0){
            
            $receiver_cpf_cnpj = $request->input('cpf_cnpj');

            $receiver = User::where('cpf_cnpj',$receiver_contact)->first();
            $receiver_account = Account::where('user_id',$receiver->id)->first();
            $receiver_current_bal = $receiver_account->balance;
            $receiver_account->balance = $receiver_current_bal + $amount;
            $receiver_account->save();

            $transaction = new Transaction();
            $transaction->type = 'send';
            $transaction->trans_id = str_random(15);
            $transaction->amount = $amount;
            $transaction->description=$request->input('description');
            $transaction->user_id = $id = Auth::user()->id;
            $transaction->sender = Auth::user()->name;
            $transaction->status='completed';
            $transaction->receiver = $receiver->name;
            $transaction->save();
            

            $sender_account = Account::where('user_id',$user->id)->first();
            $sender_account->balance = $remaining_balance;
            $sender_account->save();

            $request->session()->put('success','Transferência realizada com sucesso');
            return redirect()->route('home');
        }else
        {
            $request->session()->put('error','Saldo insuficiente');
            return redirect()->route('send');
        }
    }
}
