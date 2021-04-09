<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <?php
  $minutesBeforeSessionExpire = 60;
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire * 60))) {

    session_unset();     // unset $_SESSION   
    session_destroy();   // destroy session data 
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Session Sudah Expired, Silahkan Login Kembali</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
    redirect('auth');
  }
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity


  $user       = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row();
  $pengaturan = $this->m_setting->detail_web();
  ?>
  <!-- Brand Logo -->
  <a href="<?php echo base_url() ?>" class="brand-link">
    <img src="<?php echo base_url() ?>assets/foto/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $pengaturan->nama_sekolah ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/foto/' . $user->image) ?>" class=" elevation-2">
      </div>
      <div class="info">
        <a href="<?php echo base_url('dashboard/profil') ?>" class="d-block"><?php echo $user->nama ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == "dashboard" && $this->uri->segment(2) == "") {
                                                                          echo "active";
                                                                        } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if ($this->session->userdata('role_id') == 0) { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('siswa') ?>" class="nav-link <?php if ($this->uri->segment(1) == "siswa") {
                                                                        echo "active";
                                                                      } ?>">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="<?php echo base_url('mapel') ?>" class="nav-link <?php if ($this->uri->segment(1) == "mapel") {
                                                                      echo "active";
                                                                    } ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Mata Pelajaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('guru') ?>" class="nav-link <?php if ($this->uri->segment(1) == "guru") {
                                                                      echo "active";
                                                                    } ?>">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Guru
            </p>
          </a>
        </li>
        <?php if ($this->session->userdata('role_id') == 0) { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == "user") {
                                                                        echo "active";
                                                                      } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a href="<?php echo base_url('file') ?>" class="nav-link <?php if ($this->uri->segment(1) == "file") {
                                                                      echo "active";
                                                                    } ?>">
            <i class="nav-icon far fa-folder-open"></i>
            <p>
              File
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link <?php if ($this->uri->segment(1) == "galeri" && "foto") {
                                        echo "active";
                                      } ?>">
            <i class="nav-icon fa fa-images"></i>
            <p>
              Galeri
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('galeri') ?>" class="nav-link <?php if ($this->uri->segment(1) == "galeri" && $this->uri->segment(2) != "foto") {
                                                                            echo "active";
                                                                          } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Kegiatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('galeri/foto') ?>" class="nav-link <?php if ($this->uri->segment(2) == "foto") {
                                                                                echo "active";
                                                                              } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Foto</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="<?php echo base_url('pengumuman') ?>" class="nav-link <?php if ($this->uri->segment(1) == "pengumuman") {
                                                                            echo "active";
                                                                          } ?>">
            <i class="nav-icon fas fa-bullhorn"></i>
            <p>
              Pengumuman
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard/setting') ?>" class="nav-link <?php if ($this->uri->segment(2) == "setting") {
                                                                                  echo "active";
                                                                                } ?>">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Setting
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<!-- kontennya -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?php echo $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li> -->
            <li class="breadcrumb-item"><a href="<?php echo base_url($menu) ?>"><?php echo $menu ?></a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">