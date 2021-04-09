<div><?php echo $this->session->flashdata('pesan'); ?></div>

<div class="content">
  <div>
    <button class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah File</button>
  </div>
  <div>
    <h3 class="text-gray-800 ml-2">Jumlah File : <?php echo $total; ?></h3>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-hover text-gray-800 text-center">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Keterangan File</th>
                    <th>file</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($file as $sis) : ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $sis->nama_file ?></td>
                      <td><?php echo $sis->file ?></td>

                      <td onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('file/hapus/' . $sis->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('file/edit/' . $sis->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Input File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('file/tambah'); ?>
        <div class="form-groub">
          <label>Nama</label>
          <input type="text" name="nama_file" class="form-control">
        </div><br>
        <div class="form-groub">
          <label>Upload file</label>
          <input type="file" name="file" class="form-control" required>
        </div><br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>