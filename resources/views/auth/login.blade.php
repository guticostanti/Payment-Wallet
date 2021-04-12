@extends('layouts.app')

@section('content')
 <!-- start:form login -->


    <section class="panel panel-default">
        {{--@if ($message = Session::get('success'))
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php //Session::forget('success');?>
        @endif--}}

        {{-- @if ($message = Session::get('error'))
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php //Session::forget('error');?>
        @endif --}}

            <header class="panel-heading text-center panel-relative">
                <h3><b>Fazer Login na Carteira</b></h3>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" id="inputEmail1" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Senha</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Lembrar-me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                    <a href="{{ route('preregister') }}" class="btn btn-primary">Criar Conta</a>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
    </section>



@endsection