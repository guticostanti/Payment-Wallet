
<?php $__env->startSection('content'); ?>

<div class="row" id="home-content">
    <div class="col-lg-9">
        <section class="panel">
            

            
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
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    
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
                        <h2> BRL</h2>
                    </div>
                </div>
            </div>
            <!-- end:user info -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/dashboard.blade.php ENDPATH**/ ?>