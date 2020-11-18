<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>" />

    <title><?= esc($title); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/packages/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow justify-content-end container-fluid">

        <div class="col-3 justify-content-center">
            <a class="ml-5 d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
                <img src="https://cdn.discordapp.com/attachments/727854268987605083/760150393035948052/LOGOSAnsfondgris.png" style="max-width:200px;" alt="logo">
            </a>
        </div>
        <div class="col-9 justify-content-center">
            <!-- Topbar Search -->
            <form class="d-none d-sm-block float-right form-inline mr-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php echo base_url('aideTechniques') ?>" method="post">
                <div class="input-group">
                    <input type="text" name="searchBar" class="form-control bg-darkerlight border-0 small" placeholder="Rechercher une aide technique..." aria-label="Search" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Topbar -->

</head>

<body>