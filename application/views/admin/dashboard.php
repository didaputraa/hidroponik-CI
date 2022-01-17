<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh"
  content="120">
  <link rel="icon" href="<?php echo base_url('asset/AdminLTE');?>/dist/img/hidroponikyuh.ico" type="image/gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> <?php echo $judul;?> </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('asset/AdminLTE');?>/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/AdminLTE');?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url('Dashboard');?>" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- coba -->
      
      <!-- end coba -->
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav ml-auto">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('uploads/'.$isi->foto_user);?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo($this->session->userdata('Admin')['log_nama']);?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('uploads/'.$isi->foto_user);?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo($this->session->userdata('Admin')['log_nama']);?>             <small>Since Jan. 2019 </small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <a href="<?php echo base_url('Dashboard/profil');?>" class="dropdown-item">
                  <i class="fas fa-user mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url('Login/logout');?>" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="dropdown-item">
                  <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url('Dashboard');?>" class="brand-link">
        <img src="<?php echo base_url('asset/AdminLTE');?>/dist/img/hidroponikyuh.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight"><b>Hidroponik</b>Yuh</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('uploads/'.$isi->foto_user);?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url('Dashboard/profil');?>" class="d-block"><?php echo($this->session->userdata('Admin')['log_nama']);?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Dashboard/profil');?>" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Data User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('users/input_user');?>" class="nav-link">
                  <i class="far fa fa-user-plus nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('users/tabel_user');?>" class="nav-link">
                  <i class="far fa fa-list-alt nav-icon"></i>
                  <p>Daftar User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('tinggi');?>" class="nav-link">
              <i class="nav-icon fas fa-water"></i>
              <p>
                Ketinggian Air
            </p>
            </a>
            </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('suhu');?>" class="nav-link">
              <i class="nav-icon fa fa-tint"></i>
              <p>
                Suhu dan Kelembaban
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('cahaya');?>" class="nav-link">
              <i class="nav-icon fas fa-sun"></i>
              <p>
                Intensitas Cahaya
              </p>
              </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('Dashboard/contact');?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Our Team
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Login/logout');?>" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $status;?> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><?php echo $status;?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <?php echo $this->session->flashdata('message');?>
        <?php $this->load->view($home);?>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://hidroponikyuh.tech">hidroponikyuh.tech</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Smart Garden</b> Hidroponik
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('asset/AdminLTE');?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('asset/AdminLTE');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('asset/AdminLTE');?>/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('asset/AdminLTE');?>/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('asset/AdminLTE');?>/dist/js/demo.js"></script>
<script src="<?php echo base_url('asset/AdminLTE');?>/dist/js/pages/dashboard3.js"></script>

 <script>
        $(document).ready(function() {
            var url = window.location;
            var element = $('ul.sidebar-menu a').filter(function() {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }).parent().addClass('active');
            if (element.is('li')) {
                element.addClass('active').parent().parent('li').addClass('active')
            }
        });
    </script>
    
</body>
</html>
