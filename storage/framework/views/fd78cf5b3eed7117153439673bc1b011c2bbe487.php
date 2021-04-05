
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
                    <th>Sender</th>
                    <th>Receiver</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID da Transação</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                </tr>
            </tfoot>
            <tbody>
            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($transaction->trans_id); ?></td>
                    <td><?php echo e($transaction->created_at); ?></td>
                    <td><?php echo e($transaction->type); ?></td>
                    <td><?php echo e($transaction->amount); ?></td>
                    <td><?php echo e($transaction->sender); ?></td>
                    <td><?php echo e($transaction->receiver); ?></td>
                    <td><button class="btn btn-primary">Details</button></div></td>
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
<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#trans-table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#trans-table').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/transaction.blade.php ENDPATH**/ ?>