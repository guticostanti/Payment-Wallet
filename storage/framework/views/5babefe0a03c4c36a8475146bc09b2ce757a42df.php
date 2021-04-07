
<?php $__env->startSection('content'); ?>

<div class="row" id="home-content">
    <div class="col-lg-9">
        <section class="panel">
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
                <header class="panel-heading">
                    <b>Transações recentes</b> 
                </header>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID da Transação</th>
                            <th>Data</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($transaction->trans_id); ?></td>
                            <td><?php echo e($transaction->created_at); ?></td>
                            <td><?php echo e($transaction->type); ?></td>
                            <td><?php echo e($transaction->amount); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        </section>
        

            <!-- end:state overview -->

            
            <!-- start:timeline -->
            
            <!-- end:timeline -->
        </div>
        <div class="col-lg-3">
            <!-- start:user info -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <header class="panel-title">
                        <div class="text-center">
                            <strong>Resumo da Carteira</strong>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/home.blade.php ENDPATH**/ ?>