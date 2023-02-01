<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="INFO-CAA" />
    <!-- Token-->
    <meta name="<?php echo csrf_token() ?>" content="<?php echo csrf_hash(); ?>" class="csrf" />
    <!-- Sidebar-->
    <title><?php echo $this->renderSection('title'); ?> <?php echo ' - ' . env('APP_NAME'); ?> </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo site_url('manager_assets/'); ?>assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo site_url('manager_assets/css/styles.css') ?>" rel="stylesheet" />

    <?php echo $this->renderSection('styles'); ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('manager'); ?>">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('categories'); ?>">categoria</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('categories'); ?>">Clientes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('categories'); ?>">Eventos</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('categories'); ?>">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo route_to('categories'); ?>">Status</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="<?php echo route_to('manager'); ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo route_to('manager'); ?>">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo route_to('manager'); ?>" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatorios</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo route_to('manager'); ?>">Action</a>
                                    <a class="dropdown-item" href="<?php echo route_to('manager'); ?>">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo route_to('manager'); ?>">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->

            <?php echo $this->renderSection('content'); ?>


        </div>
    </div>
    <!-- jQuery Core JS-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo site_url('manager_assets/'); ?>js/scripts.js"></script>

    <?php echo $this->renderSection('scripts'); ?>

</body>

</html>