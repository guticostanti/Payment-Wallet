@extends('layouts.app')
@section('content')
 <!-- start:form login -->
    <section class="panel panel-default">
        @if ($message = Session::get('success'))
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php Session::forget('error');?>
        @endif

        <header class="panel-heading text-center">
            <h3><b>Fazer Transação</b></h3>
        </header>

        <div class="panel-body ">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form role="form" id="payment-form" action="{{ route('send')}}" method="post">
                @csrf
                <div id="payment-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden':''}}">
                    {{ Session::get('error') }}
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">CPF do Destinatário</label>
                    <input type="text" class="form-control" name="cpf_cnpj" placeholder="e.g 254702244756">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Valor</label>
                    <input type="text" class="form-control" name="amount" placeholder="amount to send">
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Desrição</label>
                    <textarea class="form-control" name="description" id="description" placeholder="short description"></textarea>     
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </section>
@endsection
