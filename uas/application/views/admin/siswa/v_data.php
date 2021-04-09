<div class="content mb-5">
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="d-flex justify-content-between">
    <div>
      <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Siswa</button>
      <a href="<?php echo base_url('siswa/print') ?>" class="btn btn-sm btn-danger"><i class="fa fa-print"> Cetak</i></a>
    </div>
    <?php echo form_open('siswa/cari') ?>
    <div class="input-group">
      <input type="search" name="key" class="form-control form-control-sm" placeholder="cari...">
      <button type="submit" class="btn btn-sm btn-primary">cari</button>
    </div>
    <?php echo form_close() ?>
  </div>
  <h3 class="text-gray-800 mt-3 ml-2">Jumlah Data Siswa : <?php echo $total; ?></h3>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-hover text-gray-800">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telpon</th>
                    <th colspan="3">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($siswa as $sis) : ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $sis->nama ?></td>
                      <td><?php echo $sis->nis ?></td>
                      <td><?php echo $sis->alamat ?></td>
                      <td><?php echo $sis->tgl_lahir ?></td>
                      <td><?php echo $sis->no_telp ?></td>
                      <td><?php echo anchor('siswa/detail/' . $sis->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('siswa/hapus/' . $sis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('siswa/edit/' . $sis->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('siswa/tambah'); ?>
        <div class="form-groub">
          <label>Nama Siswa</label>
          <input type="text" name="nama" class="form-control" required>
        </div><br>
        <div class="form-groub">
          <label>NIS</label>
          <input type="text" name="nis" class="form-control" required>
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
          <label>Foto Siswa</label>
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