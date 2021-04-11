<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo SITE_NAME ?></title>
	<meta name="description" content="Diploma 3">
    <meta name="author" content="Diploma 3">
    <link rel="icon" type="image/png" href="http://www.amikom.ac.id/template/newamikom/images/fav.png" sizes="32x32"/>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">

	<!--SOAL NOMOR 1-->
	<h1><?php echo RESPONSI ?></h1>
	<!--BATAS SOAL-->

	<div id="body">
		

		<ul type="1">
			<H3>KONSTANTA TASK !!!</H3>
			<li>Ubah nama "Kelas 03" diatas menjadi "Nama dan Nim Anda" !!</li>
			<code>application/config/constans.php</code>
			
			<hr>

			<H3>CLASS TASK !!!</H3>
			<li>Perbaiki sebuah class controller dengan nama "Register", untuk menampilkan inputan dari form register yang sudah disediakan !! <a href=" <?php echo base_url('index.php/register'); ?>">Register</a>
				<br>nb : Variable nama -> $nama_NamaAnda 
				<br>nb : variable nim -> $nim_NimAnda
			</li>
				
			<code>application/controllers/Register.php</code>
			
			<hr>
			
			<H3>SESSION TASK !!!</H3>
			<li>Perbaiki proses login dan UBAH nama variable inputan pada class "Login", agar proses login dapat berjalan dan menuju halaman user_berhasil !! <a href=" <?php echo base_url('index.php/login'); ?>">Login</a>
				<br>nb : Variable username -> $user_NamaAnda 
				<br>nb : variable password -> $pass_NimAnda
			</li>
			<li>Perbaiki fungsi logout, agar session dapat dihapus.</li>
			<code>application/controllers/login.php</code>
			
			<hr>

			<H3>VARIABLE TASK !!!</H3>
			<li>Perbaiki sebuah class controller dengan nama "Login", agar variable session dapat dipanggil pada halaman user-berhasil !! <a href=" <?php echo base_url('index.php/login/berhasil'); ?>">done....</a></li>
			<code>application/view/admin/user_berhasil.php</code>
			
			<hr>

		<p>Dikumpulkan jam 3 <a href=" <?php echo base_url('index.php/register'); ?>">Register</a>.</p>
		</ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>