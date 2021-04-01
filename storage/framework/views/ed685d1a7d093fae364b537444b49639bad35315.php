
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
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Tentativa\resources\views/clients/transaction.blade.php ENDPATH**/ ?>