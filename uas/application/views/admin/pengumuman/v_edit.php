<div class="content container mb-5">
  <?php foreach ($pengumuman as $sis) { ?>
    <?php echo form_open_multipart('pengumuman/update'); ?>
    <div class="row">
      <div class="col-md-6">
        <div class="form-groub">
          <label>Judul Pengumuman</label>
          <input type="hidden" name="id" class="form-control" value="<?php echo $sis->id ?>" required>
          <input type="text" name="judul" class="form-control" value="<?php echo $sis->judul ?>" required>
        </div><br>
      </div>
      <div class="col-md-6">
        <div class="form-groub">
          <label>Edit Foto</label>
          <input type="file" name="foto" id="inputFile" class="imgFile form-control">
        </div><br>
      </div>
      <div class="col-12">

        <div class="col-12">
          <div class="form-groub">
            <label>Isi Pengumuman</label>
            <textarea name="isi" id="editor"><?php echo $sis->isi ?></textarea>
          </div><br>
        </div>
      </div>
      <a href="<?php echo base_url('pengumuman') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary ml-3">Simpan</button>
      <?php echo form_close(); ?>
    <?php } ?>
    </div>