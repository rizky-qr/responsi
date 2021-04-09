<div class="content container mb-5">
  <?php echo form_open_multipart('pengumuman/tambah'); ?>
  <div class="row">
    <div class="col-md-6">
      <div class="form-groub">
        <label>Judul pengumuman</label>
        <input type="text" name="judul" class="form-control" required>
      </div><br>
    </div>
    <div class="col-md-6">
      <div class="form-groub">
        <label>Sampul Pengumuman</label>
        <input type="file" name="foto" class="form-control">
      </div><br>
    </div>
    <div class="col-12">
      <div class="form-groub">
        <label>Isi Pengumuman</label>
        <textarea name="isi" id="editor"></textarea>
      </div><br>
    </div>
  </div>


  <a href="<?php echo base_url('pengumuman') ?>" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
  <button type="reset" class="btn btn-danger">Reset</button>
  <button type="submit" class="btn btn-primary">Simpan</button>

  <?php echo form_close(); ?>
</div>