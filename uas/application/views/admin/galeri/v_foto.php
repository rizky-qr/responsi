<div class="content container mb-3">
    <div><?php echo $this->session->flashdata('pesan'); ?></div>


    <?php echo form_open_multipart('galeri/tambahfoto/' . $detail->id); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-groub">
                <label>Keterangan Foto</label>
                <input type="hidden" name="id_galeri" class="form-control" value="<?php echo $detail->id ?>" required>
                <input type="text" name="ket_foto" class="form-control">
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="form-groub">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control">
            </div><br>
        </div>
    </div>


    <a href="<?php echo base_url('galeri') ?>" class="btn btn-secondary">Kembali</a>
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>

    <?php echo form_close(); ?>


</div>


<div class="container">
    <div class="row">
        <?php
        $no = 1;
        foreach ($foto as $sis) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                <div class="text-center">
                    <label><?php echo $sis->ket_foto ?></label>
                    <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->foto ?>" class="w-100">
                    <a onclick="javascript: return confirm('Anda Yakin hapus') " href="<?php echo base_url('galeri/hapusfoto/' . $detail->id . '/' . $sis->id) ?>" class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i> </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>