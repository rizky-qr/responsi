<div class="content container mb-5">
  <table class="table">
    <tr>
      <th width="200px">Nama Lengkap</th>
      <td><?php echo $detail->nama ?></td>
    </tr>
    <tr>
      <th>NIP</th>
      <td><?php echo $detail->nip ?></td>
    </tr>
    <tr>
      <th>Mata Pelajaran</th>
      <td><?php echo $detail->mapel ?></td>
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
    <?php if ($detail->foto ==  null) { ?>
      <td></td>
    <?php } else { ?>
      <td><img src="<?php echo base_url(); ?>files/foto_guru/<?php echo $detail->foto ?>" width="90" height="120"></td>
    <?php } ?>

    </tr>

  </table>
  <a href="<?php echo base_url('guru') ?>" class="btn btn-secondary">Kembali</a>




</div>