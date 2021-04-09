<div class="container pt-5 mt-5">
  <div class=" m-0 pb-5">
    <h1 class="text-center p-5">Download<span class="title-under"></span></h1>
    <div class="card p-4" style="color: black; ">
      <table class="table table-bordered feature_title table-hover">
        <thead>
          <tr>
            <th width="50px">NO</th>
            <th>Keterangan File</th>
            <th width="120px">Download</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($file as $sis) : ?>
            <tr>
              <td class="text-center"><?php echo $no++ ?> </td>
              <td><?php echo $sis->nama_file ?></td>
              <td class="text-center"><a href="<?php echo base_url('files/download/' . $sis->file) ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i>Download</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>