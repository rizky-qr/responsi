<div class="content container mb-5">
  <?php foreach ($siswa as $sis) { ?>
    <?php echo form_open_multipart('siswa/update'); ?>
    <div class="row">
      <div class="col-md-6">
        <div class="form-groub">
          <label>Nama Siswa</label>
          <input type="hidden" name="id" class="form-control" value="<?php echo $sis->id ?>" required>
          <input type="text" name="nama" class="form-control" value="<?php echo $sis->nama ?>" required>
        </div><br>
        <div class="form-groub">
          <label>NIS</label>
          <input type="text" name="nis" class="form-control" value="<?php echo $sis->nis ?>" required>
        </div><br>
        <div class="form-groub">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?php echo $sis->alamat ?>">
        </div><br>
        <div class="form-groub">
          <label>Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $sis->tgl_lahir ?>">
        </div><br>
        <div class="form-groub">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo $sis->email ?>">
        </div><br>
      </div>
      <div class="col-md-6">
        <div class="form-groub">
          <label>No. Telepon</label>
          <input type="text" name="no_telp" class="form-control" value="<?php echo $sis->no_telp ?>">
        </div><br>
        <div class="form-groub">
          <label>Edit Foto</label>
          <input type="file" name="foto" id="inputFile" class="imgFile form-control">
        </div><br>
        <div>
          <img src="<?php echo base_url(); ?>files/foto_siswa/<?php echo $sis->foto ?>" id="imgView" width="150">
        </div>
      </div>



      <a href="<?php echo base_url('siswa') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary ml-3">Simpan</button>
      <?php echo form_close(); ?>
    <?php } ?>
    </div>