<!DOCTYPE html>
<html>
<head>
    <title>TASK KE-2</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/custom.css');?>">
</head>
<body>

<div class="page-wrapper bg-teal p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                
                <div class="card-body card-custom">
                    <!--SOAL NOMOR 2-->
                        <h3 style="color: #d0d3c5">TAMPILKAN DATA REGISTER DISINI</h3><hr>
                        <h5>Nama Lengkap : <?php echo $nm; ?></h5>
                        <h5>NIM : <?php echo $nim; ?></h5>
                        <h5>Jenis Kelamin : <?php echo $ttl; ?></h5>
                        <h5>Tanggal Lahir : <?php echo $jkl; ?></h5>
                        <h5>Kelas : <?php echo $cls; ?></h5>
                    <!--BATAS SOAL-->
                    
                </div>
                <div class="card-body">
                    <h2 class="title">RESPONSI | REGISTER</h2>
                    <form action="<?php echo base_url('index.php/register/registrasi')?> " method="post">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAMA LENGKAP" name="nama">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="TANGGAL LAHIR" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">CLASS</option>
                                    <option>Class PWEB_01</option>
                                    <option>Class PWEB_02</option>
                                    <option>Class PWEB_03</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="MASUKAN NIM" name="nim">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
