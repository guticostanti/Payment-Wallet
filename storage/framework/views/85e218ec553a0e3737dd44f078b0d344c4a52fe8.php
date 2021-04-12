
<?php $__env->startSection('content'); ?>
 <!-- start:form login -->
    <section class="panel panel-default">
        <?php if($message = $request->session()->get('success')): ?>
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <?php echo $message; ?>

            </div>
            <?php $request->session()->forget('success');?>
        <?php endif; ?>

        <?php if($message = $request->session()->get('error')): ?>
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <?php echo $message; ?>

            </div>
            <?php $request->session()->forget('error');?>
        <?php endif; ?>

        <header class="panel-heading text-center">
            <h3><b>Fazer Transação</b></h3>
        </header>

        <div class="panel-body ">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form role="form" id="payment-form" action="<?php echo e(route('send')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div id="payment-error" class="alert alert-danger <?php echo e(!$request->session()->exists('error') ? 'hidden':''); ?>">
                    <?php echo e($request->session()->get('error')); ?>

                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">CPF ou CNPJ do Destinatário</label>
                    <input type="text" class="form-control" name="cpf_cnpj" placeholder="CPF/CNPJ - Somente números">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Valor</label>
                    <input type="text" class="form-control" name="amount" placeholder="Valor da transação">
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Descrição</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Breve Descrição"></textarea>     
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/send.blade.php ENDPATH**/ ?>