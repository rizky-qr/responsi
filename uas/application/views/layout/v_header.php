<?php
$pengaturan = $this->m_setting->detail_web();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $pengaturan->nama_sekolah ?> | <?php echo $title ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Website SMAN 1 HU'U">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="SMAN 1 HU'U, Web Sekolah, Sekolah, pendidikan,Website Sekolah">
  <meta name="author" content="Muhamad Rizky">


  <link rel="icon" href="<?php echo base_url() ?>assets/foto/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/bootstrap4/bootstrap.min.css">
  <link href="<?php echo base_url() ?>assets/plugin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/plugin/colorbox/colorbox.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/responsive.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/courses_responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/courses.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/about.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/about_responsive.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/blog.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styles/blog_responsive.css">

</head>

<style>
  body {
    background-color: #f3f3f3;
  }

  .title-under {
    display: block;
    margin: 5px auto;
    background: #13bdee;
    height: 2px;
    width: 280px;
  }

  .title-under2 {
    display: block;
    margin: 5px auto;
    background: #fff;
    height: 2px;
    width: 280px;
  }

  .backTop:hover {
    /* background-color:#14bdee; */
    cursor: pointer;
  }

  .link-nav li {
    position: relative;
  }

  .link-nav li:not(:last-child) {
    margin-right: 44px;
  }

  .link-nav li a {
    font-size: 18px;
    font-weight: 500;
    color: #384158;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
  }

  .link-nav li a:hover,
  .link-nav li.active a {
    color: #14bdee;
    cursor: pointer;
  }

  .link-nav li.active::after {
    display: block;
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #14bdee;
    content: '';
  }
</style>
</head>

<body>