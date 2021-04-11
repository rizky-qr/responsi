<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
			
<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo SITE_NAME ?></title>

  <!--Ini untuk tampilan dashboard-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">

  <!--Ini untuk tampilan form-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	<style>
    *{margin: 0px auto;}
    html,body{
        height: 100%;
    }
    #container{
      min-height: 100%;
      position: relative;
    }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    .footer{
      width: 100%;
      height: 50px;
      padding-left: 10px;
      line-height: 50px;
      background: #333;
      color: #fff;
      position: relative;
      bottom: 0px;
      }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
	</style>
</head>
<body id="container">