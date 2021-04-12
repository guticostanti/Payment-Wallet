
<?php $__env->startSection('content'); ?>
 <!-- start:form login -->
    <section class="panel panel-default">
        <header class="panel-heading text-center">
            <h3><b>Registrar</b></h3>
        </header>

        <div class="panel-body ">
        <div class="row" style="text-align: center;">
            <a href="<?php echo e(route('register')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Pessoa Física</a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Pessoa Jurídica (lojista)</a>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/preregister.blade.php ENDPATH**/ ?>