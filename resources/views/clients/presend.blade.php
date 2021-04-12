@extends('layouts.app')
@section('content')
 <!-- start:form login -->
    <section class="panel panel-default">
        @if ($message = $request->session()->get('success'))
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php $request->session()->forget('success');?>
        @endif

        @if ($message = $request->session()->get('error'))
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php $request->session()->forget('error');?>
        @endif

        <header class="panel-heading text-center">
            <h3><b>Fazer Transação</b></h3>
        </header>

        <div class="panel-body ">
        <div class="row" style="text-align: center;">
            <a href="{{ route('sendpf') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Destinatário Pessoa Física</a>
            <a href="{{ route('sendpj') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Destinatário Pessoa Jurídica</a>
        </div>
        </div>
    </section>
@endsection
