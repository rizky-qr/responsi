<div class="content mb-5">
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="d-flex justify-content-between">
    <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Gallery Kegiatan</button>
    <?php echo form_open('galeri/cari') ?>
    <div class="input-group">
      <input type="search" name="key" class="form-control form-control-sm" placeholder="cari...">
      <button type="submit" class="btn btn-sm btn-primary">cari</button>
    </div>
    <?php echo form_close() ?>
  </div>
  <h3 class="text-gray-800 mt-3 ml-2">Jumlah Gallery Kegiatan : <?php echo $total; ?></h3>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50">NO</th>
                    <th>Kegiatan</th>
                    <th class="text-center" colspan="2">Sampul</th>
                    <th class="text-center" colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($galeri as $sis) : ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $sis->nama_galeri ?></td>
                      <td class="text-center">
                        <img src="<?php echo base_url(); ?>files/galeri/<?php echo $sis->sampul ?>" height="90" /><br>

                      </td>
                      <td class="text-center">
                        <p> Jumlah : <i class="fa fa-image"> <?php echo $sis->jml_foto ?> foto</i></p>
                        <a href="<?php echo base_url('galeri/addfoto/' . $sis->id); ?>">
                          <div class="btn btn-success btn-sm"><i class="fa fa-plus"> Foto Kegiatan</i></div>
                        </a>
                      </td>
                      <?php if ($sis->jml_foto == 0) {
                      ?>
                        <td width="50" onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('galeri/hapus/' . $sis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <?php } else { ?>
                        <td width="150"> <small class="text-danger">jika ingin mengapus galeri ini hapus dulu foto-foto di dalamnya</small></td>
                      <?php } ?>
                      <!-- <td width="50" onclick="javascript: return confirm('Anda Yakin hapus') "><?php //echo anchor('galeri/hapusbanyak/' . $sis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') 
                                                                                                    ?></td> -->

                      <td width="50"><?php echo anchor('galeri/edit/' . $sis->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Input Gallery Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('galeri/tambah'); ?>
        <div class="form-groub">
          <label>Nama Kegiatan</label>
          <input type="text" name="nama_galeri" class="form-control" required>
        </div><br>

        <div class="form-groub">
          <label>Sampul</label>
          <input type="file" name="sampul" class="form-control">
        </div><br>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>