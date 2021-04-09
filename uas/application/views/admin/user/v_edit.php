<div class="content container">
  <?php foreach ($user as $sis) { ?>
    <form action="<?php echo base_url() . 'user/update'; ?>" method="post">
      <div class="form-groub">
        <label>Nama</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $sis->id ?>">
        <input type="text" name="nama" class="form-control" value="<?php echo $sis->nama ?>">
      </div><br>
      <div class="form-groub">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $sis->username ?>">
      </div><br>
      <div class="form-groub">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $sis->password ?>">
      </div><br>



      <a href="<?php echo base_url('user') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

  <?php } ?>
</div>