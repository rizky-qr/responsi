<div class="content mb-5">
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="d-flex justify-content-between">
    <div>
      <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Guru</button>
      <a href="<?php echo base_url('guru/print') ?>" class="btn btn-sm btn-danger"><i class="fa fa-print"> Cetak</i></a>
    </div>
    <?php echo form_open('guru/cari') ?>
    <div class="input-group">
      <input type="search" name="key" class="form-control form-control-sm" placeholder="cari...">
      <button type="submit" class="btn btn-sm btn-primary">cari</button>
    </div>
    <?php echo form_close() ?>
  </div>


  <!-- <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data guru</button> -->

  <h3 class="text-gray-800 mt-3 ml-2">Jumlah Data Guru : <?php echo $total; ?></h3>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-hover text-gray-800">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Guru</th>
                    <th>NIP</th>
                    <th>Mata Pelajaran</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telpon</th>
                    <th colspan="3">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($guru as $sis) : ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $sis->nama ?></td>
                      <td><?php echo $sis->nip ?></td>
                      <td><?php echo $sis->mapel ?></td>
                      <td><?php echo $sis->alamat ?></td>
                      <td><?php echo $sis->tgl_lahir ?></td>
                      <td><?php echo $sis->no_telp ?></td>
                      <td><?php echo anchor('guru/detail/' . $sis->id_guru, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('guru/hapus/' . $sis->id_guru, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('guru/edit/' . $sis->id_guru, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('guru/tambah'); ?>
        <div class="form-groub">
          <label>Nama Guru</label>
          <input type="text" name="nama" class="form-control" required>
        </div><br>
        <div class="form-groub">
          <label>NIP</label>
          <input type="text" name="nip" class="form-control" required>
        </div><br>
        <div class="form-groub">
          <label>Mata Pelajaran</label>
          <select class="form-control" name="id_mapel">
            <option value="">--Pilih Mata Pelajaran--</option>
            <?php foreach ($mapel as $ma) { ?>
              <option value="<?php echo $ma->id ?>"><?php echo $ma->mapel ?></option>
            <?php } ?>
          </select>
        </div><br>
        <div class="form-groub">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control">
        </div><br>
        <div class="form-groub">
          <label>Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control">
        </div><br>
        <div class="form-groub">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div><br>
        <div class="form-groub">
          <label>No. Telepon</label>
          <input type="text" name="no_telp" class="form-control">
        </div><br>
        <div class="form-groub">
          <label>Foto Guru</label>
          <input type="file" name="foto" class="form-control">
        </div><br>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>