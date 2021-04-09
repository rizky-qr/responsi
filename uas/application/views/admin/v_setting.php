<div class="content container ">
    <?php echo $this->session->flashdata('pesan'); ?>
    <h3><i class="fas fa-cog"></i> Foto Halaman Utama</h3>
    <div class="container pl-4">
        <div class="row">
            <?php
            $no = 1;
            foreach ($carausel as $slide) : ?>
                <div class="col-6 col-sm-4 col-md-3 pb-3 pt-3 d-flex align-items-end">

                    <div class="">

                        <label class="text-center"><?php echo $slide->informasi ?></label>
                        <img src="<?php echo base_url(); ?>assets/foto/carausel/<?php echo $slide->foto ?>" class="w-100 h-100">
                        <a onclick="javascript: return confirm('Anda Yakin hapus') "><?php echo anchor('dashboard/hapusfoto/' . $slide->id, '<div class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i></div>') ?></a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php echo form_open_multipart('dashboard/tambahfoto'); ?>


        <div class="content container ">
            <div class="form-groub">
                <label>Keterangan</label>
                <input type="text" name="informasi" class="form-control">
            </div>
            <div class="form-groub">
                <label>Slide Foto</label>
                <input type="file" name="file" class="form-control">
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<br><br><br><br>


<div class="content container mb-5 pb-5">
    <h3><i class="fas fa-cog"></i> Profile Sekolah</h3>
    <div class="container pl-4">
        <?php echo form_open_multipart('dashboard/update'); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="form-groub">
                    <label>Nama Kepala Sekolah</label>
                    <input type="text" name="nama_kepsek" class="form-control" value="<?php echo $setting->nama_kepsek ?>" required>
                </div><br>
                <div class="form-groub">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" value="<?php echo $setting->nip ?>" required>
                </div><br>
                <div class="form-groub">
                    <label>Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control" value="<?php echo $setting->nama_sekolah ?>" required>
                </div><br>
                <div class="form-groub">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $setting->alamat ?>">
                </div><br>
                <div class="form-groub">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $setting->email ?>">
                </div><br>
                <div class="form-groub">
                    <label>No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $setting->no_telp ?>">
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="form-groub">
                    <label>Foto Kepala Sekolah</label>
                    <input type="file" name="file" id="inputFile" class="imgFile form-control">
                </div><br>
                <div>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $setting->foto_kepsek ?>" id="imgView" width="200">
                </div>

            </div>
            <div class="col-12">
                <div class="form-groub">
                    <label>Visi</label>
                    <textarea name="visi" class="form-control" rows="5"><?php echo $setting->visi ?></textarea>
                </div><br>
                <div class="form-groub">
                    <label>Misi</label>
                    <textarea name="misi" class="form-control" rows="5"><?php echo $setting->misi ?></textarea>
                </div><br>
                <div class="form-groub">
                    <label>Sambutan</label>
                    <textarea name="sambutan" id="editor"><?php echo $setting->sambutan ?></textarea>
                </div><br>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</div>