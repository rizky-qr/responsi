<div class="container p-5 mt-5">

  <div class="section-title">
    <h2 class="text-center pb-5 pt-5">Gallery Kegiatan<span class="title-under"></span></h2>
  </div>




  <div class="">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="blog_post_container row d-flex justify-content-between ml-4 gallery_items">

            <?php
            $no = 1;
            foreach ($galeri as $sis) : ?>

              <?php if ($sis->jml_foto > 0) { ?>
                <!-- Blog Post -->
                <div class="gallery_item blog_post trans_200 col-lg-3 col-md-4 col-5 p-0">
                  <div class="blog_post_body p-0">
                    <div class="blog_post_title text-center">
                      <h4><?php echo $sis->nama_galeri  ?> </h4>
                    </div>
                  </div>
                  <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center" href=""><i class="fa fa-search-plus"></i></div>
                  <a href="<?php echo base_url('id/foto/' . $sis->id) ?>" class="blog_post_image">
                    <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->sampul  ?>" alt="<?php echo $sis->sampul  ?>">
                  </a>

                </div>
              <?php } else { ?>

                <div class="gallery_item blog_post trans_200 col-lg-3 col-md-4 col-5 p-0">
                  <div class="blog_post_body p-0">
                    <div class="blog_post_title text-center">
                      <h4><?php echo $sis->nama_galeri  ?> </h4>
                    </div>
                  </div>
                  <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->sampul  ?>" alt="<?php echo $sis->sampul  ?>">


                </div>
              <?php } ?>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>