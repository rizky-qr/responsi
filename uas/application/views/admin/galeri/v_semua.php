<div class="content mb-5">
    <?php echo $this->session->flashdata('pesan'); ?>

    <h3 class="text-gray-800 mt-3 ml-2">Jumlah Foto : <?php echo $total; ?></h3>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <?php
                                $no = 1;
                                foreach ($foto as $slide) : ?>
                                    <div class="col-6 col-sm-4 col-md-3 pb-3 pt-3 d-flex align-items-end">

                                        <div class="text-center">

                                            <label class="text-center"><?php echo $slide->ket_foto ?></label>
                                            <img src="<?php echo base_url(); ?>files/galeri/<?php echo $slide->foto ?>" class="w-100 h-100">
                                            <a onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('dashboard/hapusfoto/' . $slide->id, '<div class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i></div>') ?></a>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <?php
                                        // $no = 1;
                                        // foreach ($galeri as $slide) : 
                                        ?>
                                    <div class="col-6 col-sm-4 col-md-3 pb-3 pt-3  d-flex align-items-end">

                                        <div class="text-center">

                                            <label class="text-center"><?php //echo $slide->nama_galeri 
                                                                        ?></label>
                                            <img src="<?php //echo base_url(); 
                                                        ?>files/galeri/<?php //echo $slide->sampul 
                                                                        ?>" class="w-100 h-100">

                                        </div>
                                    </div>
                                <?php //endforeach; 
                                ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>