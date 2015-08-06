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
    <link rel="icon" href="<?php echo base_url();?>assets/userfile/icon.png" type="image/png">

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
                <a class="navbar-brand" href="<?php echo base_url()."beranda";?>"><img src="<?php echo base_url();?>assets/userfile/logo.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>pages/beranda">Beranda</a></li>
                    <li><a href="<?php echo base_url();?>pages/profil">Profil</a></li>
                    <li><a href="<?php echo base_url();?>pages/faq">FAQ</a></li>
                    <li><a href="<?php echo base_url();?>pages/artikel">Artikel</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Materi <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>pages/materi/tulisan">Materi tertulis</a></li>
                            <li><a href="<?php echo base_url();?>pages/materi/file">File Materi</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>pages/kontak">Kontak</a></li>
                    <li><a href="<?php echo base_url();?>pages/sipenmaru">Sipenmaru</a></li>
                    <li><a href="" data-toggle="modal" data-target="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
        </div>
        <form role="form" action='<?php echo base_url();?>welcome/login' method='post'>
            <fieldset>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url();?>assets/userfile/icon.png?>" width="100%">
                        </div>
                        <div class="col-lg-8">
                            <?php
                            if ($isLogin == 'no'){
                                ?>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="ID" name="id" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                <?php
                            }
                            else if ($isLogin == 'yes'){
                                ?>
                                <h3>
                                    Anda sudah masuk sebagai <a href = "<?php echo base_url();?>dashboard"><b><?php echo $session_data['Nama']?></b></a>. 
                                </h3>
                                    Bukan Anda? <a href = "<?php echo base_url();?>welcome/logout">Logout </a> lalu Login lagi
                                <?php
                            }
                            ?>
                            <div class="checkbox">
                        </div>
                    </div>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <div class="modal-footer">
                    <button class="btn btn-success">Login</button>
                </div>
            </fieldset>
        </form>
    </div>
  </div>
</div>