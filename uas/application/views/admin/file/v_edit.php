<div class="content container">
  <?php foreach ($file as $sis) { ?>
    <?php echo form_open_multipart('file/update'); ?>
    <div class="form-groub">
      <label>Keterangan File</label>
      <input type="hidden" name="id" class="form-control" value="<?php echo $sis->id ?>">
      <input type="text" name="nama_file" class="form-control" value="<?php echo $sis->nama_file ?>">
    </div><br>
    <div class="form-groub">
      <label>Edit File</label>
      <input type="file" name="file" id="inputFile" class="imgFile form-control">
    </div><br>

    <a href="<?php echo base_url('file') ?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <?php echo form_close(); ?>

  <?php } ?>
</div>