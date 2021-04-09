<div class="container p-5 mt-5">

    <div class="section-title">
        <h2 class="text-center pb-5 pt-5"><?= $title ?><span class="title-under"></span></h2>
    </div>

    <div class="row">
        <div class="col">
            <div class="blog_post_container row d-flex justify-content-around ml-4 gallery_items">
                <?php
                $no = 1;
                foreach ($foto as $sis) : ?>
                    <!-- Blog Post -->
                    <div class="gallery_item blog_post trans_200 col-sm-6 col-md-5 col-lg-4 p-3">
                        <div class="blog_post_body p-0">
                            <div class=" text-center">
                                <h4><?php echo $sis->ket_foto  ?></h4>
                                <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->foto  ?>" alt="<?php echo $sis->foto  ?>">
                            </div>
                        </div>



                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>