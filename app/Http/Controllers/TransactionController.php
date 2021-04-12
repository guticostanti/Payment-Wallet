<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Transaction;
use Auth;
use App\Account;
use App\User;

class TransactionController extends Controller
{

    public function getTransactions()
    {
        $user = Auth::user();
        $transactions = Transaction::where('user_id',$user->id)->paginate(2);
        return view('clients.transaction', compact('user', 'transactions'));
    }

    public function getSendPf(Request $request)
    {
        return view('clients.sendpf', compact('request'));
    }

    public function getSendPj(Request $request)
    {
        return view('clients.sendpj', compact('request'));
    }

    public function getPreSend(Request $request) {
        return view('clients.presend', compact('request'));
    }

    public function postSend(Request $request) {
        $user = Auth::user();
        $sender_account = Account::where('user_id',$user->id)->first();
        $balance = $sender_account->balance;
        $balance = (float)$balance;

        $amount = $request->input('amount');
        $amount = (float)$amount;
        $remaining_balance = $balance - $amount;

        $apiresponse = Http::get('http://run.mocky.io/v3/8fafdd68-a090-496f-8c9a-3442cf30dae6')->json();


        if($remaining_balance > 0 && $apiresponse["message"] == 'Autorizado'){
            
            $receiver_cpf_cnpj = $request->input('cpf_cnpj');

            $receiver = User::where('cpf_cnpj',$receiver_cpf_cnpj)->first();
            $receiver_account = Account::where('user_id',$receiver->id)->first();
            $receiver_current_bal = $receiver_account->balance;
            $receiver_account->balance = $receiver_current_bal + $amount;
            $receiver_account->save();

            $transaction = new Transaction();
            $transaction->type = 'Enviado';
            $transaction->trans_id = str_random(15);
            $transaction->amount = $amount;
            $transaction->description=$request->input('description');
            $transaction->user_id = $id = Auth::user()->id;
            $transaction->sender = Auth::user()->name;
            $transaction->status='completed';
            $transaction->receiver = $receiver->name;
            $transaction->save();

            $received_transaction = new Transaction();
            $received_transaction->type = 'Recebido';
            $received_transaction->trans_id = str_random(15);
            $received_transaction->amount = $amount;
            $received_transaction->description=$request->input('description');
            $received_transaction->user_id = $receiver->id;
            $received_transaction->sender = Auth::user()->name;
            $received_transaction->status='completed';
            $received_transaction->receiver = $receiver->name;
            $received_transaction->save();
            

            $sender_account = Account::where('user_id',$user->id)->first();
            $sender_account->balance = $remaining_balance;
            $sender_account->save();

            $request->session()->put('success','Transferência realizada com sucesso');
            return redirect()->route('home');
        } else if ($remaining_balance <= 0) {
            $request->session()->put('error','Saldo insuficiente');
            return redirect()->route('send');
        } else {
            $request->session()->put('error','Transação não autorizada');
            return redirect()->route('send');
        }
    }
}
