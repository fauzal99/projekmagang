<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('#'); ?>" class="brand-link">
    <img src="<?= base_url('pemprovntb/uploads/settings/pemprov.jpg'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

    <b> <span class="brand-text font-weight-light">Admin </span></b>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->




    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('index.php/admin/C_admin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Berkas File
            </p>
          </a>
        <li class="nav-item">
          <a href="<?= base_url('index.php/admin/C_admin/berita'); ?>" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Berita

            </p>
          </a>
        <li class="nav-item">
          <a href="<?= base_url('index.php/admin/C_admin/album'); ?>" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Album Foto

            </p>
          </a>
          <!-- <li class="nav-item">
          <a href="<?= base_url('index.php/C_laporan'); ?>" class="nav-link">
            <i class="nav-icon 	fas fa-money-bill"></i>
            <p>
              Konfirmasi Pembayaran

            </p>
          </a>
          <li class="nav-item">
          <a href="<?= base_url('index.php/C_cetak'); ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Cetak

            </p>
          </a>
</li> -->

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
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item active"></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">