<div class="content container">
    <?php echo form_open_multipart('dashboard/updateuser'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-groub">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $setting->nama ?>">
            </div><br>
            <div class="form-groub">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $setting->username ?>">
            </div><br>
            <div class="form-groub">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $setting->password ?>">
            </div><br>
        </div>
        <div class="col-md-5">
            <div class="form-groub">
                <label>Edit Foto</label>
                <input type="file" name="image" id="inputFile" class="imgFile form-control">
            </div><br>
            <div>
                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $setting->image ?>" id="imgView" width="150">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <?php echo form_close(); ?>

</div>