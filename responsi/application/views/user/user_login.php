<!DOCTYPE html>
<html>
  <head>
  <title>Diploma Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="Diploma 3">
      <meta name="author" content="Diploma 3">
      <link rel="icon" href="https://home.amikom.ac.id/media/2019/12/cropped-amikom-512-32x32.png" sizes="32x32" />
	
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'bootstrap/css/bootstrap.css'?>" rel="stylesheet">
	<style>
    body{
      background-color: #2c2c54;
      color: #fff;
    }
		.btn-primary {
  		background-color: #482273;
  		border-color: #f0ad4e;
		}
		.btn-primary:hover {
  		background-color: #f0ad4e;
  		border-color: #482273;
		}
    input{
      margin-bottom: 10px;
    }
    .x{
      padding: 5px;
      color: #ff4757;
    }
    .xx{
      /*margin-bottom: 60px;*/
    }
    .col-lg-12{
      border-bottom: 1px dotted red;
    }
    footer{
      padding-top: 20px;
    }
    .logo {
      width: 100px;
      height: 100px;
      margin: 20px 0 20px 20px;
    }
    .atau{
      margin-top: 30px;
      margin-bottom: 30px;
    }
    
	</style>
  </head>
  <body>

    <div class="container">
      <div class="row"> 
        <div class="col-lg-12">
          <img class="img-responsive img-border logos" src="<?php echo base_url().'images/logo_d3ti.png';?>">
        </div>
        <div class="col-lg-10">
          <h1>RESPONSI 19-D3TI-03</h1>
        </div>
      </div>
        <div class="col-lg-12">
              <div class="col-md-4">
                <form class="form-signin" action="<?php echo base_url().'index.php/login/in'?>" method="post">
                    <h2 class="form-signin-heading">Halaman Login</h2>

                    <h5 class="form-signin-heading">Username & Password silahkan tanyakan kaprodi</h5>

                    <hr>
                      <h4 class="text-danger">
                      <?php
                        if (isset($_GET['pesan'])) {
                          if ($_GET['pesan'] == "gagal") {
                            echo "Login gagal! username dan password salah!";
                          } else if ($_GET['pesan'] == "no_user") {
                            echo "Maaf, anda harus mengisi username terlebih dahulu";
                          } else if ($_GET['pesan'] == "belum_login") {
                            echo "Maaf, anda harus mengakses halaman ini dari form Login";
                          } else if ($_GET['pesan'] == "user_huruf") {
                            echo "Maaf, username harus berupa huruf";
                          } else if ($_GET['pesan'] == "logout") {
                            echo "Anda telah berhasil logout";
                          }
                        }
                        ?>
                      </h4>
                    <hr>

                      <label for="name" class="sr-only">Username</label>
                      <input type="text" id="name" name="username" class="form-control" placeholder="name" required autofocus><br>
                      <label for="password" class="sr-only">Password</label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <hr>
                      <button class="btn btn-lg btn-primary btn-block xx" type="submit"> Sign in</button>
                </form>
                <div class="atau"><p style="text-align: center;"></p></div>
                
              </div>
              
              <div class="col-md-8 border-samping">                                     
                      <h1>Focus on the work that matters</h1>
                      <a href="#">
                        <span class="glyphicon glyphicon-alert x"></span>
                      </a>  Layanan membuat akun belum tersedia <br>
                      <a href="#">
                        <span class="glyphicon glyphicon-alert x"></span>
                      </a>  Username & Password silahkan tanyakan kaprodi <br>
                      <a href="#">
                        <span class="glyphicon glyphicon-alert x xx"></span>
                      </a>  Baca pedoman laporan magang sebelum upload                 
              </div>
          </div>
          <div class="col-md-12">
          <footer>
            <blockquote class="blockquote-reverse">
              <h5>Sedang dalam perbaikan, harap digunakan dengan bijak.</h5>
              <h6>From admin d3ti</h6>
            </blockquote>
          </footer>
        </div>
      </div> <!-- /container -->
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    

  </body>
</html>
