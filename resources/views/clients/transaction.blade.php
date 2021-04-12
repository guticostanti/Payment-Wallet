@extends('layouts.app')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <b><h3>Histórico de Transações</h3></b> 
        </header>
        <table class="table display table-hover" id="trans-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID da Transação</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Remetente</th>
                    <th>Destinatário</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
                    <tr>
                    <td>{{$transaction->trans_id}}</td>
                    <td>{{$transaction->created_at}}</td>
                    <td>{{$transaction->type}}</td>
                    <td>{{$transaction->amount}}</td>
                    <td>{{$transaction->sender}}</td>
                    <td>{{$transaction->receiver}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

    <style media="screen" type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    </style>

@endsection