@extends('layouts.app')
@section('content')
 <!-- start:form login -->
    <section class="panel panel-default">
        <header class="panel-heading text-center">
            <h3><b>Registrar</b></h3>
        </header>

        <div class="panel-body ">
        <div class="row" style="text-align: center;">
            <a href="{{ route('register') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Pessoa Física</a>
            <a href="{{ route('register') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Pessoa Jurídica (lojista)</a>
        </div>
        </div>
    </section>
@endsection
