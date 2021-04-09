<div class="team">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <h2 class="section_title">GURU SMAN 1 HU'U</h2>
        </div>
      </div>
    </div>
    <div class="row team_row">
      <?php
      $no = 1;
      foreach ($guru as $sis) : ?>

        <!-- Team Item -->
        <div class="col-6 col-md-3 team_col">
          <div class="team_item">
            <div class="team_image"><img src="<?php echo base_url(); ?>files/foto_guru/<?php echo $sis->foto ?>"></div>
            <div class="team_body">
              <div class="team_title"><a href=""><?php echo $sis->nama ?></a></div>
              <div class="team_subtitle">NIP : <?php echo $sis->nip ?></div>
              <div class="team_subtitle"><?php echo $sis->mapel ?></div>
              <div class="social_list">
              </div>
            </div>
          </div>
        </div>


      <?php endforeach; ?>
    </div>
  </div>
</div>