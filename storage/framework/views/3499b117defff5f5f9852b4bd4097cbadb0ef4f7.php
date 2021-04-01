
<?php $__env->startSection('content'); ?>
 <!-- start:form login -->


    <section class="panel panel-default">
        <header class="panel-heading text-center panel-relative">
            <h3><b>Criar Conta</b></h3>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nome Completo</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="names" id="inputEmail1" placeholder="Names">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">CPF ou CNPJ</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="cpf_cnpj" id="inputEmail1" placeholder="cpf_cnpj">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" id="inputEmail1" placeholder="Email">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Senha</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                                </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Criar Conta</button>
                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary" >Voltar para Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Tentativa\resources\views/clients/register.blade.php ENDPATH**/ ?>