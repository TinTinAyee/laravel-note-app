<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href=<?php echo e(asset('css/all.min.css')); ?>>
    <!-- Ionicons -->
    <link rel="stylesheet" href=<?php echo e(asset('css/ionicons.min.css')); ?>>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href=<?php echo e(asset('css/tempusdominus-bootstrap-4.min.css')); ?>>
    <!-- iCheck -->
    <link rel="stylesheet" href=<?php echo e(asset('css/icheck-bootstrap.min.css')); ?>>
    <!-- JQVMap -->
    <link rel="stylesheet" href=<?php echo e(asset('css/jqvmap.min.css')); ?>>
    <!-- Theme style -->
    <link rel="stylesheet" href=<?php echo e(asset('css/adminlte.min.css')); ?>>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href=<?php echo e(asset('css/OverlayScrollbars.min.css')); ?>>
    <!-- Daterange picker -->
    <link rel="stylesheet" href=<?php echo e(asset('css/daterangepicker.css')); ?>>
    <!-- summernote -->
    <link rel="stylesheet" href=<?php echo e(asset('css/summernote-bs4.min.css')); ?>>

    

    <link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.bootstrap4.min.css')); ?>">

    

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->

                

                
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href=<?php echo e(route('admin')); ?> class="brand-link">
                <img src=<?php echo e(asset('img/AdminLTELogo.png')); ?> alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src=<?php echo e(asset('img/user2-160x160.jpg')); ?> class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dasboard')): ?>
                            <li class="nav-item menu-open">
                                <a href=<?php echo e(route('admin')); ?> class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <p>
                                    Authorization
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=<?php echo e(route('adminList.index')); ?> class="nav-link">
                                        <p>Admin List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=<?php echo e(route('role.index')); ?> class="nav-link">
                                        <p>Role</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=<?php echo e(route('permission.index')); ?> class="nav-link">
                                        <p>Permission</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('widget')): ?>
                            <li class="nav-item">
                                <a href=<?php echo e(route('admin.widget')); ?> class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Widgets
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogList')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('blog.index')); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Blog
                                        <span class="right badge badge-warning">New</span>
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a href="<?php echo e(route('post.index')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Post
                                    <span class="right badge badge-warning">New</span>
                                </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->


        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>


        <!-- /content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src=<?php echo e(asset('js/jquery.min.js')); ?>></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=<?php echo e(asset('js/jquery-ui.min.js')); ?>></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>></script>
    <!-- ChartJS -->
    <script src=<?php echo e(asset('js/Chart.min.js')); ?>></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('js/sparkline.js')); ?>"></script>
    <!-- JQVMap -->
    <script src=<?php echo e(asset('js/jquery.vmap.min.js')); ?>></script>
    <script src=<?php echo e(asset('js/jquery.vmap.usa.js')); ?>></script>
    <!-- jQuery Knob Chart -->
    <script src=<?php echo e(asset('js/jquery.knob.min.js')); ?>></script>
    <!-- daterangepicker -->
    <script src=<?php echo e(asset('js/moment.min.js')); ?>></script>
    <script src=<?php echo e(asset('js/daterangepicker.js')); ?>></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=<?php echo e(asset('js/tempusdominus-bootstrap-4.min.js')); ?>></script>
    <!-- Summernote -->
    <script src=<?php echo e(asset('js/summernote-bs4.min.js')); ?>></script>
    <!-- overlayScrollbars -->
    <script src=<?php echo e(asset('js/jquery.overlayScrollbars.min.js')); ?>></script>
    <!-- AdminLTE App -->
    <script src=<?php echo e(asset('js/adminlte.js')); ?>></script>
    <!-- AdminLTE for demo purposes -->
    <script src=<?php echo e(asset('js/demo.js')); ?>></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=<?php echo e(asset('js/dashboard.js')); ?>></script>

    

    <script src=<?php echo e(asset('js/jquery.dataTables.min.js')); ?>></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/responsive.bootstrap4.min.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $("#example2").DataTable();
        });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/layout/master.blade.php ENDPATH**/ ?>