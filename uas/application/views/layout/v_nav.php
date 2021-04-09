<div class="super_container">
  <?php
  $pengaturan = $this->m_setting->detail_web();
  ?>
  <!-- Header -->

  <header class="header">

    <!-- Top Bar -->
    <div class="top_bar">
      <div class="top_bar_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                <ul class="top_bar_contact_list">
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div><?= $pengaturan->no_telp ?></div>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <div><?= $pengaturan->email ?></div>
                  </li>
                  <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div><?= $pengaturan->alamat ?></div>
                  </li>
                </ul>
                <div class="top_bar_login ml-auto">
                  <div class="login_button" style="border-bottom:2px solid #14bdee;"><a href="<?php echo base_url('auth') ?>">Login</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-lg bg-light" style="border-bottom: 3px solid #14bdee;">
      <div class="container">
        <a href="<?php echo base_url('') ?>">
          <div class="logo_text m-2"><?= $pengaturan->nama_sekolah ?></div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon" ></span> -->
          <i class="fa fa-bars"></i>
        </button>


        <!-- jam dan Back to Top-->
        <h3 style="color: black; position: fixed; bottom:40px ; right: 40px;">
          <div class="btn btn-sm btn-light backTop" style="border: 2px solid black;">
            <div id='jam'></div>
          </div>
        </h3>
        <!-- end jam -->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto link-nav">
            <li class="nav-item m-0 ml-3 dropdown <?php if ($this->uri->segment(2) == "profil") {
                                                    echo "active";
                                                  } elseif ($this->uri->segment(2) == "guru") {
                                                    echo "active";
                                                  } elseif ($this->uri->segment(2) == "video") {
                                                    echo "active";
                                                  } ?>">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h4 class="dropdown-toggle ">Profil </h4>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item <?php if ($this->uri->segment(2) == "profil") {
                                          echo "active";
                                        } ?>" href="<?php echo base_url('id/profil') ?>">
                  <h4 class="m-2">Sambutan, Visi dan Misi</h4>
                </a>
                <hr class="m-0">
                <a class="dropdown-item <?php if ($this->uri->segment(2) == "guru") {
                                          echo "active";
                                        } ?>" href="<?php echo base_url('id/guru') ?>">
                  <h4 class="m-2">Guru</h4>
                </a>
                <hr class="m-0">
                <a class="dropdown-item <?php if ($this->uri->segment(2) == "video") {
                                          echo "active";
                                        } ?>" href="<?php echo base_url('id/video') ?>">
                  <h4 class="m-2">Video</h4>
                </a>
              </div>
            </li>
            <li class="nav-item m-0 ml-3  <?php if ($this->uri->segment(2) == "pengumuman") {
                                            echo "active";
                                          } ?>">
              <a href="<?php echo base_url('id/pengumuman') ?>" class="nav-link">
                <h4>Pengumuman</h4>
              </a>
            </li>
            <li class="nav-item m-0 ml-3  <?php if ($this->uri->segment(2) == "download") {
                                            echo "active";
                                          } ?>">
              <a href="<?php echo base_url('id/download') ?>" class="nav-link">
                <h4>Download</h4>
              </a>
            </li>
            <li class="nav-item m-0 ml-3  <?php if ($this->uri->segment(2) == "gallery") {
                                            echo "active";
                                          } ?>">
              <a href="<?php echo base_url('id/gallery') ?>" class="nav-link">
                <h4>Gallery</h4>
              </a>
            </li>
            <li class="nav-item m-0 ml-3  <?php if ($this->uri->segment(2) == "kontak") {
                                            echo "active";
                                          } ?>">
              <a href="<?php echo base_url('id/kontak') ?>" class="nav-link">
                <h4>Kontak</h4>
              </a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- /.navbar -->
  </header>


  <div class="content" style="padding-top: 56px;">