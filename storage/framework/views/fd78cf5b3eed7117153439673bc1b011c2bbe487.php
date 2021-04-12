
<?php $__env->startSection('content'); ?>
    <section class="panel">
        <header class="panel-heading">
            <b><h3>Histórico de Transações</h3></b> 
        </header>
        <table class="table display table-hover" id="trans-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID da Transação</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Remetente</th>
                    <th>Destinatário</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($transaction->trans_id); ?></td>
                    <td><?php echo e($transaction->created_at); ?></td>
                    <td><?php echo e($transaction->type); ?></td>
                    <td><?php echo e($transaction->amount); ?></td>
                    <td><?php echo e($transaction->sender); ?></td>
                    <td><?php echo e($transaction->receiver); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>

    <style media="screen" type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/transaction.blade.php ENDPATH**/ ?>