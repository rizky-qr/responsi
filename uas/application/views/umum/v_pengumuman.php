<!-- Courses -->

<div class="container p-5 mt-5">
  <div class="row">


    <div class="feature_content col-lg-9">
      <h1 class="text-center pb-5 pt-5">Pengumuman<span class="title-under"></span></h1>
      <!-- Accordions -->
      <div class="accordions  row">

        <?php
        $no = 1;
        foreach ($pengumuman as $sis) : ?>

          <div class="elements_accordions col-12 mb-5">
            <div class="accordion_container" style="border: 2px solid  black;">
              <div class="accordion d-flex flex-row align-items-center">
                <div> <?php echo word_limiter($sis->judul, 10); ?></div>
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
      <!-- Accordions End -->
    </div>



    <!-- Sidebar -->
    <div class="col-lg-3">
      <div class="">
        <!-- Gallery -->
        <div class="sidebar_section p-3">
          <div class="sidebar_section_title  pt-5">Foto Terbaru</div>
          <div class="sidebar_gallery">
            <ul class="d-flex flex-row align-items-start justify-content-between flex-wrap row">
              <?php
              $no = 1;
              foreach ($galeri as $sis) : ?>
                <li class="gallery_item" width="50" height="50">
                  <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                  <a class="colorbox w-100 h-100" href="<?php echo base_url(); ?>files/galeri/<?php echo $sis->foto  ?>">
                    <img class="w-100 h-100" src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->foto  ?>" alt="">
                  </a>
                </li>

              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>