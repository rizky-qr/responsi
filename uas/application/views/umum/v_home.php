<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    foreach ($carausel as $key => $value) {
      $active = ($key == 0) ? 'active' : '';
      echo '<li data-target="#carouselExampleCaptions" data-slide-to="' . $key . '" class="' . $active . '"></li>';
    }
    ?>
  </ol>
  <div class="carousel-inner ">
    <?php
    foreach ($carausel as $key => $value) {
      $active = ($key == 0) ? 'active' : '';
      echo '<div class="carousel-item ' . $active . '">
        <img src="' . base_url() . 'assets/foto/carausel/' . $value->foto . '" alt="…" class="d-block w-100 " style="max-height: 500px;">
        <div class="carousel-caption d-none d-md-block">
        <h5 class="home_slider_title" style="color:black;">' . $value->informasi . '</h5>
        </div>
      </div>';
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="background-color:#14bdee; padding-bottom: 50px; padding-top: 50px;">
  <h2 class="text-center" style="color:white;">
    <!-- <marquee scrollamount="8">Selamat Datang Di SMAN 1 HU'U</marquee> -->
    Selamat Datang Di SMAN 1 HU'U
  </h2>


</div>


<div class=" m-0 pb-5">
  <h1 class="text-center p-5">Pengumuman<span class="title-under"></span></h1>
  <div class="container ">
    <div class="feature_content">
      <div class="accordions  row">

        <?php
        $no = 1;
        foreach ($pengumuman as $sis) : ?>


          <div class="elements_accordions col-md-6 mb-5">
            <div class="accordion_container " style="border: 2px solid  black;">
              <div class="accordion d-flex flex-row align-items-center">
                <div> <?php echo word_limiter($sis->judul, 8); ?></div>
              </div>
              <div class="accordion_panel row">
                <?php
                if ($sis->foto = $sis->foto) { ?>
                  <div class="col-9">
                    <p></i><?php echo word_limiter($sis->isi, 40); ?></p>
                    <a href=""><?php echo anchor('id/isi_pengumuman/' . $sis->id . '/' . word_limiter($sis->judul, 8), '<div class="btn btn-success">Selengkapnya...</div>') ?></a>
                  </div>

                  <img class="col-3 h-100" src="<?php echo base_url(); ?>files/foto_pengumuman/<?php echo $sis->foto ?>" alt="">
                <?php } else { ?>
                  <div class="col-12">
                    <p></i><?php echo word_limiter($sis->isi, 40); ?></p>
                    <a href=""><?php echo anchor('id/isi_pengumuman/' . $sis->id . '/' . word_limiter($sis->judul, 8), '<div class="btn btn-success">Selengkapnya...</div>') ?></a>
                  </div>
                <?php } ?>

              </div>
              <hr class="m-0">
              <p></i><?php echo $sis->tgl ?></p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="text-center"><a href="<?php echo base_url('id/pengumuman') ?>" class="btn btn-primary">Pengumuman lainnya</a></div>
  </div>
</div>






<div class="pb-5 " style="background-color:#14bdee;">
  <div class="container">
    <h1 class="text-center p-5">Gallery<span class="title-under2"></span></h1>
    <div class="row">
      <div class="col">
        <div class="blog_post_container row  ml-2  ">
          <?php
          $no = 1;
          foreach ($galeri as $sis) : ?>
            <!-- Blog Post -->
            <div class="gallery_item blog_post trans_200 col-md-3 col-lg-4">
              <div class="blog_post_body p-0">
                <div class="blog_post_title text-center">
                  <h4><?php echo $sis->nama_galeri  ?></h4>
                </div>
              </div>
              <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->sampul  ?>" alt="<?php echo $sis->sampul  ?>">
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
    <div class="text-center pt-3"><a href="<?php echo base_url('id/gallery') ?>" class="btn btn-secondary">Gallery Lainnya</a></div>
  </div>
</div>