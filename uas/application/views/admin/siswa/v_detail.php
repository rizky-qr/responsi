<div class="content container mb-5">
  <table class="table">
    <tr>
      <th width="200px">Nama Lengkap</th>
      <td><?php echo $detail->nama ?></td>
    </tr>
    <tr>
      <th>NIS</th>
      <td><?php echo $detail->nis ?></td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td><?php echo $detail->alamat ?></td>
    </tr>
    <tr>
      <th>tanggal Lahir</th>
      <td><?php echo $detail->tgl_lahir ?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?php echo $detail->email ?></td>
    </tr>
    <tr>
      <th>No. Telepon</th>
      <td><?php echo $detail->no_telp ?></td>
    </tr>
    <tr>
      <?php if ($detail->foto ==  null) { ?>
        <td></td>
      <?php } else { ?>
        <td><img src="<?php echo base_url(); ?>files/foto_siswa/<?php echo $detail->foto ?>" width="90" height="120"></td>
      <?php } ?>
    </tr>

  </table>
  <a href="<?php echo base_url('siswa') ?>" class="btn btn-secondary">Kembali</a>




</div>