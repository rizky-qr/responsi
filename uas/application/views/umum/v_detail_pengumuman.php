<!-- Courses -->

<div class="container p-5 ">
  <div class="row">



    <div class="feature_content col-md-9">
      <h3 class="text-center pb-5 pt-5"><?php echo $detail->judul ?></h3>
      <p>Tanggal : <?php echo $detail->tgl ?></p><br>
      <div class="row">
        <?php
        if ($detail->foto = $detail->foto) { ?>
          <div class="col-9">
            <p></i><?php echo $detail->isi; ?></p>
          </div>

          <img class="col-3 h-100" src="<?php echo base_url(); ?>files/foto_pengumuman/<?php echo $detail->foto ?>" alt="">
        <?php } else { ?>
          <div class="col-12">
            <p></i><?php echo $detail->isi; ?></p>
          </div>
        <?php } ?>

      </div>
    </div>



    <!-- Sidebar -->
    <div class="col-md-3">
      <div class="">
        <!-- Gallery -->
        <div class="pt-3 pb-3">
          <div class="sidebar_section_title pt-5 mb-4">Lainnya</div>
          <div class="row">
            <?php
            $no = 1;
            foreach ($limit as $sis) : ?>

              <div class="col-12 d-flex justify-content-start pb-3">
                <h4 class="mr-2"> > </h4>
                <h5>
                  <?php echo anchor('id/isi_pengumuman/' . $sis->id . '/' . word_limiter($sis->judul, 8),  word_limiter($sis->judul, 8)) ?>
                  <p>tanggal : <?= $sis->tgl ?></p>
                </h5>
              </div>

            <?php endforeach; ?>

          </div>
        </div>
        <!-- Gallery -->
        <div class="sidebar_section p-3">
          <div class="sidebar_section_title  pt-5">Gallery</div>
          <div class="sidebar_gallery">
            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
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