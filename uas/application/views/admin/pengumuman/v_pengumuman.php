<div class="content mb-5">
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="d-flex justify-content-between">
    <div>
      <a href="<?php echo base_url('pengumuman/add') ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i> Tambah Data pengumuman</a>
    </div>
    <?php echo form_open('pengumuman/cari') ?>
    <div class="input-group">
      <input type="search" name="key" class="form-control form-control-sm" placeholder="cari...">
      <button type="submit" class="btn btn-sm btn-primary">cari</button>
    </div>
    <?php echo form_close() ?>
  </div>
  <h3 class="text-gray-800 mt-3 ml-2">Jumlah Data pengumuman : <?php echo $total; ?></h3>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px">NO</th>
                    <th width="200px">Judul Pengumuman</th>
                    <th>Isi pengumuman</th>
                    <th width="100px">Foto Sampul</th>
                    <th width="100px">Tanggal</th>
                    <th colspan="3">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pengumuman as $sis) : ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo word_limiter($sis->judul, 8); ?></td>
                      <td><?php echo word_limiter($sis->isi, 20); ?></td>
                      <td>
                        <?php if ($sis->foto == null) { ?>
                          <p> sampul</p>
                        <?php } else { ?>
                          <a href="<?php echo base_url(); ?>files/foto_pengumuman/<?php echo $sis->foto ?>">
                            <img src="<?php echo base_url(); ?>files/foto_pengumuman/<?php echo $sis->foto ?>" width="90px" />
                          </a>
                        <?php  } ?>

                      </td>
                      <td><?php echo $sis->tgl ?></td>
                      <td><?php echo anchor('id/isi_pengumuman/' . $sis->id . '/' .  word_limiter($sis->judul, 8), '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('pengumuman/hapus/' . $sis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('pengumuman/edit/' . $sis->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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