<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href='<?php echo e(asset("picture/logo/logo.png")); ?>'>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <!-- Bootstrap Core CSS -->
    <link href='<?php echo e(asset("content/css/bootstrap.min.css")); ?>' rel="stylesheet">

    <!-- Progress Bar -->
    <link href='<?php echo e(asset("content/css/style.css")); ?>' rel="stylesheet">

    <!-- Custom Css for Admin Panel -->
    <link href='<?php echo e(asset("content/css/adminpanel.css")); ?>' rel="stylesheet">

    <!-- Font Awesome -->

        <link href="<?php echo e(asset('content/unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet"> -->
    <!-- <link href='<?php echo e(asset("content/css/font-awesome.min.css")); ?>' rel="stylesheet"> -->

    
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <li class="nav-item"> 
                        <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)">
                        <div class="navbar-brand">
                            <img src='<?php echo e(asset("picture/logo/logo.png")); ?>' class="dark-logo" width="50px" height="50px" />
                            <!-- <img src='<?php echo e(asset("content/images/logo.png")); ?>' alt="homepage" class="dark-logo" width="50px" height="50px" /> -->
                        </div>
                        </a> 
                    </li>

                    <li class="nav-item m-l-10"> 
                        <a class="nav-link  hidden-sm-down text-muted  ">
                            <div class="navbar-brand">
                                <!-- Logo icon -->
                                <!-- <img src='<?php echo e(asset("content/images/logo.png")); ?>' alt="homepage" class="dark-logo" width="55px" height="55px" /> -->

                                <img src='<?php echo e(asset("picture/logo/logo.png")); ?>' class="dark-logo" width="55px" height="55px" />   
                            </div>
                        </a>
                    </li>
                </div>

                <!-- End Logo -->
                <div class="navbar-collapse">

                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <p class='school-name'><?php echo e($info->title); ?></p>
                    </ul>

                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Logout -->
                        <li class="nav-item hidden-sm-down"> 
                            <a class="nav-link hidden-sm-down text-muted"  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                <i class="fa fa-power-off"></i> <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div></a>
                            
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>

                        <li> <a class="email-compose.html" href="<?php echo e(asset('/information')); ?>"><i class="fa fa-info-circle"></i>Information</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('imageslide')); ?>"><i class="fa fa-image"></i>Image Slide</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('practices')); ?>"><i class="fa fa-dashboard"></i></i>Practices</a>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('trainings')); ?>"><i class="fa fa-tv"></i></i>Training</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('lawers')); ?>"><i class="fa fa-user-o"></i></i>Lawers</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('clients')); ?>"><i class="fa fa-user-circle-o"></i></i>Clients</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('feedback')); ?>"><i class="fa fa-comment-o"></i></i>Clients Feedback</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('membership')); ?>"><i class="fa fa-certificate"></i></i>Membership</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('links')); ?>"><i class="fa fa-chrome"></i></i>Useful Links</a>
                        </li>
                        <li> <a class="email-compose.html" href="<?php echo e(asset('paymentmethod')); ?>"><i class="fa fa-paypal"></i></i>Payment Method</a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><?php echo $__env->yieldContent('title'); ?></h3> 
                </div>
            </div>

            <div class="container-fluid">
                <?php if($errors->has('message')): ?>
                <div class="col-sm-12" id="success-alert">
                    <div class="alert  alert-success alert-dismissible fade show text-dark" role="alert">
                      <span class="badge badge-pill badge-info">Success</span>
                        <?php echo e($errors->first("message")); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <?php elseif(count($errors)>0): ?>
                    <div class="col-sm-12" id="error-alert">
                        <div class="alert  alert-danger alert-dismissible fade show text-dark" role="alert">
                          <span class="badge badge-pill badge-danger">Error</span>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php echo e($error); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. 
                <span class="pull-right"> Developed by <a class="text-primary" href="https://banglasofttech.com">Bangla Soft Tech</a></span></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->


    <!-- Additional Modal -->

    <!-- All Jquery -->
    <script src="content/js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src='<?php echo e(asset("content/js/bootstrap.js")); ?>'></script>

    <!--Custom JavaScript for progressbar and menu -->
    <script src='<?php echo e(asset("content/js/scripts.js")); ?>'></script>

    <!-- Custom JS -->
    <script src='<?php echo e(asset("content/js/main.js")); ?>'></script>

    <!-- Sidebar response for Mobile Version -->
    <script src='<?php echo e(asset("content/js/sticky-kit.min.js")); ?>'></script>

    <script src="<?php echo e(asset('content/js/adminpanel/adminpanel.js')); ?>"></script>

</body>

</html>