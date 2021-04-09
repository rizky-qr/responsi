<!DOCTYPE html>


<?php
$pengaturan = $this->m_setting->detail_web();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <title><?php echo $pengaturan->nama_sekolah ?> | <?php echo $title ?></title>

  <link rel="icon" href="<?php echo base_url() ?>assets/foto/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

  <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
  <script src="<?php echo base_url() ?>assets/ckeditor/samples/js/sample.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">


  <style>
    #imgView {
      padding: 5px;
    }

    .loadAnimate {
      animation: setAnimate ease 2.5s infinite;
    }

    @keyframes setAnimate {
      0% {
        color: #000;
      }

      50% {
        color: transparent;
      }

      99% {
        color: transparent;
      }

      100% {
        color: #000;
      }
    }

    .custom-file-label {
      cursor: pointer;
    }
  </style>


</head>