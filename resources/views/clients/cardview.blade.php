@extends('layouts.app')
@section('content')
 <!-- start:form login -->
 <section class="panel panel-default">
 <header class="panel-heading text-center">
     <h3><b>Depositar com Cartão</b></h3>
 </header>
 <div class="panel-body ">
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <form role="form" id="payment-form" action="{{-- route('cardDeposit') --}}" method="post">
        <div id="payment-error" class="alert alert-danger {{ !$request->session()->exists('error') ? 'hidden':''}}">
        {{ $request->session()->get('error') }}
        </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Número do Cartão de Crédito</label>
             <input type="text" class="form-control" id="card-number" placeholder="Número do Cartão">
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
             <label for="exampleInputPassword1">Mês de Expiração do Cartão</label>
             <input type="text" class="form-control" id="card-expiry-month" placeholder="Mês de Expiração">
         </div>
         <div class="form-group">
             <label for="exampleInputFile">Ano de Expiração do Cartão</label>
             <input type="text" class="form-control" id="card-expiry-year" placeholder="Ano de Expiração">
         </div>

         </div>
         <div class="col-md-6">
         <div class="form-group">
             <label for="exampleInputFile">CVC</label>
             <input type="text" class="form-control" id="card-cvc" placeholder="CVC">
         </div>
         <div class="form-group">
             <label for="exampleInputFile">Valor do depósito(BRL)</label>
             <input type="text" class="form-control" name="card-amount" id="card-amount" placeholder="Valor">
         </div>
         </div>
         </div>
         @csrf
         <button type="submit" class="btn btn-primary">Enviar</button>
         
   </form>
</div>
</div>
</div>
</section>
@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/" type="text/javascript"></script>
<script src="{{ asset('js/stripe.js') }}" type="text/javascript"></script>

@endsection