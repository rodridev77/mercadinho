<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Bank Loan 1.0 | Início</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="<?php echo BASE_URL ?>libs/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>libs/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= BASE_URL; ?>" class="nav-link">Início</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Link</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-th-large"></i></a>

                </li>
                <li class="nav-item">
                    <?php //if (app\Controllers\OwnerAuthController::isLogged()) : ?>
                        <a class="nav-link" href="<?= BASE_URL ?>/ownerAuth/signout">Sair Owner</a>
                    <?php //else: ?>
                        <a class="nav-link" href="<?= BASE_URL ?>/adminAuth/signout">Sair</a>
                    <?php //endif; ?>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= BASE_URL ?>libs/adminlte/dist/img/AdminLTELogo.png"
                    alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Bank Loan 1.0</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= BASE_URL ?>libs/adminlte/dist/img/avatar-admin.png"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active" id="personal">

                                <p>
                                    Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= BASE_URL ?>/adminhome" class="nav-link active ">
                                        <p>Estoque</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= BASE_URL ?>/bank" class="nav-link active">
                                        <p>Vendas</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= BASE_URL ?>/ownerhome" class="nav-link active">
                                        <p>Clientes</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= BASE_URL ?>/role" class="nav-link active">
                                        <p>Fornecedores</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php $this->loadViewInTemplate($viewPath, $viewName, $viewData); ?>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= BASE_URL ?>libs/adminlte/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/assets/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASE_URL ?>libs/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASE_URL ?>libs/adminlte/dist/js/adminlte.min.js"></script>

    <script type="text/javascript" src="<?= BASE_URL; ?>/public/assets/js/admin.js"></script>

</body>

</html>