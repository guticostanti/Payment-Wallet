
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <!-- start:state overview -->
        <section class="panel panel-default">
            <header class="panel-heading text-center panel-relative">
            </header>
            <div class="panel-body">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="names" value="<?php echo e($user->name); ?>" id="inputEmail1" placeholder="Nome" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">CPF/CNPJ</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="contact" value=" <?php echo e($user->cpf_cnpj); ?>" id="inputEmail1" disabled placeholder="CPF/CNPJ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" id="inputEmail1" placeholder="Email" disabled>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
                        </div> -->
                    </div>
                </form>               
            </div>
            </div>
            </div>
        </section>
    </div>

    <div class="col-lg-4">
        <!-- start:user info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="panel-title">
                    <div class="text-center">
                        <strong>Conta</strong>
                    </div>
                </header>
            </div>
            <div class="panel-body">
                <div class="text-center" id="author">
                    <!-- <img src="img/user/avatar-3.jpg"> -->
                    <h3>Saldo</h3>
                    <h2><?php echo e($acc_balance->balance); ?> BRL</h2>
                </div>
            </div>
        </div>
        <!-- end:user info -->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/profile.blade.php ENDPATH**/ ?>