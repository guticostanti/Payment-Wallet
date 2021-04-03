<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Carteira Digital</title>
	<link rel="stylesheet" href="<?php echo e(asset('client/css/font-awesome.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('client/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client/css/bootstrap-reset.css')); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo e(asset ('client/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
    <!-- css for this page -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="<?php echo e(asset('client/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('client/css/owl.theme.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('client/css/owl.transitions.css')); ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- start:wrapper -->
    <div id="wrapper">
        <div class="header-top">
            <!-- start:navbar -->
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="container">
                    <!-- start:navbar-header -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href=""><i class="fa fa-cash"></i><strong>Carteira Digital</strong></a>
                    </div>
                    <!-- end:navbar-header -->
                    <ul class="nav navbar-nav navbar-right top-menu">
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="img/avatar1_small.jpg">
                                <span class="username">Conta</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="log-arrow-up"></div>
                                
                                <li><a href="<?php echo e(route('login')); ?>"><i class=" fa fa-sign-in"></i>Login</a></li>
                                <li><a href="<?php echo e(route('register')); ?>"><i class=" fa fa-sign-up"></i>Cadastrar</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end:navbar -->
        </div>
        <!-- start:header -->
        <div id="header">
            <div class="overlay">
                <nav class="navbar" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <strong>MENU</strong>
                            </button>
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        
                    <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->
                <!-- <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol> -->
                <!-- end:breadcrumb -->   
        <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
        <!-- end:main -->

        <!-- start:footer -->
        
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-widget">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2020 Carteira Digital - Gustavo Costanti Lara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:footer -->

    </div>
    <!-- end:wrapper -->

	<!-- start:javascript -->
	<!-- javascript default for all pages-->
	<script src="<?php echo e(asset('client/js/jquery-1.11.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('client/js/bootstrap.min.js')); ?>"></script>


    <!-- javascript for Srikandi admin -->
    <script src="<?php echo e(asset('client/js/themes.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/jquery.nicescroll.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/jquery.sparkline.js')); ?>" type="text/javascript"></script>
    <script class="include" type="text/javascript" src="<?php echo e(asset('client/js/jquery.dcjqaccordion.2.7.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/respond.min.js')); ?>" ></script>
	<!-- end:javascript -->

    <!-- start:javascript for this page -->
    <script src="<?php echo e(asset('client/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/owl.carousel.js')); ?>" ></script>
    <script src="<?php echo e(asset('client/js/jquery.customSelect.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('clientjs/sparkline-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/easy-pie-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('client/js/count.js')); ?>"></script>
    
    
    <script>
        //owl carousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true
            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

        if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
    </script>
    <!-- end:javascript for this page -->
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>	<?php /**PATH D:\Meus repositórios github\Payment-Wallet\resources\views/clients/layout.blade.php ENDPATH**/ ?>