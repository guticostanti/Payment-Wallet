
<?php $__env->startSection('content'); ?>
 <!-- start:form login -->
 <section class="panel panel-default">
 <header class="panel-heading text-center">
     <h3><b>Depositar com Cartão</b></h3>
 </header>
 <div class="panel-body ">
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <form role="form" id="payment-form" action="" method="post">
        <div id="payment-error" class="alert alert-danger <?php echo e(!$request->session()->exists('error') ? 'hidden':''); ?>">
        <?php echo e($request->session()->get('error')); ?>

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
         <?php echo csrf_field(); ?>
         <button type="submit" class="btn btn-primary">Enviar</button>
         
   </form>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/" type="text/javascript"></script>
<script src="<?php echo e(asset('js/stripe.js')); ?>" type="text/javascript"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/cardview.blade.php ENDPATH**/ ?>