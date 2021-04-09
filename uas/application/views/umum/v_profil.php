<div class="content">
    <div class="container pt-5 mt-5">


        <h2 class="text-center pb-5 pt-5">Profil <?= $profil->nama_sekolah ?><span class="title-under"></span></h2>
        <div class="text-center">
            <img src="<?php echo base_url(); ?>assets/foto/carausel/1.jpg">
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="row ">
                    <img class="col-12 pt-5 h-100 " src="<?php echo base_url(); ?>assets/foto/<?php echo $profil->foto_kepsek ?>" alt="">
                    <h4 class="col-12 pt-2 text-center"><?= $profil->nama_kepsek ?></h4>
                    <p class="col-12 pt-2 text-center">NIP : <?= $profil->nip ?></p>

                </div>
            </div>
            <div class="col-md-8">
                <h2 class=" pb-2 pt-5">Sambutan</span></h2>
                <p><?= $profil->sambutan ?></p>
                <h2 class=" pb-2 pt-5">Visi</span></h2>
                <p><?= $profil->visi ?></p>
                <h2 class=" pb-2 pt-5">Misi</span></h2>
                <p><?= $profil->misi ?></p>

            </div>
        </div>
    </div>
</div>