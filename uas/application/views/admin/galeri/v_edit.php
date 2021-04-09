<div class="content container">

  <?php foreach ($galeri as $sis) { ?>
    <?php echo form_open_multipart('galeri/update'); ?>

    <div class="form-groub">
      <label>Nama Galerry</label>
      <input type="hidden" name="id" class="form-control" value="<?php echo $sis->id ?>" required>
      <input type="text" name="nama_galeri" class="form-control" value="<?php echo $sis->nama_galeri ?>" required>

    </div><br>
    <div class="form-groub">
      <label>Edit Foto</label>
      <input type="file" name="sampul" id="inputFile" class="imgFile form-control">
    </div><br>
    <div>
      <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->sampul ?>" id="imgView" width="150">
    </div><br>

    <a href="<?php echo base_url('galeri') ?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <?php echo form_close(); ?>

  <?php } ?>
</div>