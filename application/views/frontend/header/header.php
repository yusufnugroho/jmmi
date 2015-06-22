<?php
$assets_location = base_url()."assets/basica/";
?>

<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mentoring JMMI ITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assets_location;?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $assets_location;?>css/main.css">
    <link href="<?php echo $assets_location;?>css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $assets_location;?>css/icomoon-social.css">
	<link rel="stylesheet" href="<?php echo $assets_location;?>css/font-awesome.min.css">
	
	<script src="<?php echo $assets_location;?>js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo $assets_location;?>img/logo.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Menu 1</a></li>
                            <li><a href="#">Dropdown Menu 2</a></li>
                            <li><a href="#">Dropdown Menu 3</a></li>
                            <li><a href="#">Dropdown Menu 4</a></li>
                            <li><a href="#">Dropdown Menu 5</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="" type="button" data-toggle="modal" data-target="#register">Register</a></li> 
                    <li><a href="" data-toggle="modal" data-target="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
        <form action="<?php echo $assets_location;?>/home/register" method="POST">
          <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <h4>Icon</h4>
                </div>
                <div class="col-md-8">
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="text" class="form-control" id="NRP" placeholder="NRP">
                        </div>
                        <div class="form-group">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" class="form-control" id="namadepan" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="namabelakang" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" placeholder="telepon">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Register</button>
          </div>
        </form>
    </div>
  </div>
</div>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
        </div>
        <form action="<?php echo $assets_location;?>/welcome/login" method="POST">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="NRP">NRP</label>
                        <input type="text" class="form-control" id="NRP" placeholder="NRP">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="password">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default">Login</button>
        </div>
        </form>
    </div>

  </div>
</div>