<button class="btn btn-sm btn-primary shadow-sm ml-1 mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-cog"></i> Control Panel</button>
<h1>Selamat Datang <strong><?php echo $detail->nama ?></strong></h1>

<!-- Info boxes -->
<div class="row mt-3">
  <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url('user') ?>" class="info-box btn">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content text-center">
        <span class="info-box-text"> User</span>
        <h3 class="info-box-number"><?php echo $user; ?></h3>
      </div>
      <!-- /.info-box-content -->
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url('guru') ?>" class="info-box btn">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

      <div class="info-box-content text-center">
        <span class="info-box-text"> Guru</span>
        <h3 class="info-box-number"><?php echo $guru; ?></h3>
      </div>
      <!-- /.info-box-content -->
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url('siswa') ?>" class="info-box btn">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>

      <div class="info-box-content text-center">
        <span class="info-box-text"> Siswa</span>
        <h3 class="info-box-number"><?php echo $siswa; ?></h3>
      </div>
      <!-- /.info-box-content -->
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url('galeri') ?>" class="info-box btn">
      <span class="info-box-icon bg-warning elevation-1"><i class="far fa-images"></i></span>

      <div class="info-box-content text-center">
        <span class="info-box-text">Gallery</span>
        <h3 class="info-box-number"><?php echo $foto; ?></h3>
      </div>
      <!-- /.info-box-content -->
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Info boxes -->
        <div class="row mt-3">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('dashboard/setting') ?>" class="info-box btn">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cogs"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text"> Setting</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('guru') ?>" class="info-box btn">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text"> Guru</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('siswa') ?>" class="info-box btn">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text"> Siswa</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('galeri') ?>" class="info-box btn">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-images"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text">Gallery</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- ======================halaman======================= -->
        <!-- Info boxes -->
        <div class="row mt-3">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('file') ?>" class="info-box btn">
              <span class="info-box-icon bg-danger elevation-1"><i class="far fa-folder-open"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text"> File</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo base_url('pengumuman') ?>" class="info-box btn">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bullhorn"></i></span>

              <div class="info-box-content text-center">
                <span class="info-box-text">Info</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <!-- <div class="clearfix hidden-md-up"></div> -->

        </div>
        <!-- /.row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>