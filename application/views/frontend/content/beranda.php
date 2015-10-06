
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url();?>assets/userfile/slide1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Selamat Datang</h2>
                                <p class="animation animated-item-2">Di situs resmi Badan Pelaksana Mentoring JMMI ITS</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="faq">Pelajari Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>assets/userfile/slide2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">Jelajahi Situs Ini</h2>
                                <p class="animation animated-item-2">Rasakan pengalaman-pengalaman yang belum pernah Anda dapatkan melalui situs ini</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="faq">Pelajari Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>assets/userfile/slide3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Menu yang Tersedia</h2>
                                <p class="animation animated-item-2">Pilih Menu yang tersedia di atas untuk mengakses semua fitur-fitur yang ada</p>
                                <br>
								<a class="btn btn-md animation animated-item-3" href="faq">Pelajari Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->

<div class="section" style="background-color: #fff">
    <center>
        <h1>
            <i>Upload Terbaru</i>
        </h1>
        <h4>
            <br>
        </h4>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 blog-sidebar">
                <h4>Materi Tertulis Terbaru </h4>
                <ul class="recent-posts">
                    <?php
                    foreach ($materi_terbaru as $key_materi_terbaru => $value_materi_terbaru) {
                        ?>
                            <li><a href="<?php echo base_url(); echo 'pages/materi/baca/'; echo $value_materi_terbaru['ID_MATERI']?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php
                                        if (!empty($value_materi_terbaru['PATH_MATERI'])){
                                            echo "<img src='".base_url().$value_materi_terbaru['PATH_MATERI']."' style='width:100%; position:center'>";
                                        }
                                        else {?>
                                        <img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="col-md-8">
                                        <b>
                                        <?php
                                        echo $value_materi_terbaru['JUDUL_MATERI'];
                                        ?>
                                        </b>
                                        <p>
                                            <?php echo $value_materi_terbaru['TANGGAL_MATERI'];?> by 
                                            <?php echo $value_materi_terbaru['PENULIS_MATERI'];?>
                                        </p>
                                    </div>
                                </div>
                            </a></li>
                        <?php
                    }
                    ?>
                    <li><a href="<?php echo base_url(); echo 'pages/materi/tulisan';?>">
                        <div class="row">
                            <center>
                                Lihat yang Lain ...
                            </center>
                        </div>
                    </a></li>
                </ul>
            </div>
            <div class="col-sm-4 blog-sidebar">
                <h4>Artikel Terbaru </h4>
                <ul class="recent-posts">
                    <?php
                    foreach ($artikel_terbaru as $key_artikel_terbaru => $value_artikel_terbaru) {
                        ?>
                            <li><a href="<?php echo base_url(); echo 'pages/artikel/baca/'; echo $value_artikel_terbaru['ID_ARTIKEL']?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php
                                        if (!empty($value_artikel_terbaru['PATH_ARTIKEL'])){
                                            echo "<img src='".base_url().$value_artikel_terbaru['PATH_ARTIKEL']."' style='width:100%; position:center'>";
                                        }
                                        else {?>
                                        <img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="col-md-8">
                                        <b>
                                        <?php
                                        echo $value_artikel_terbaru['JUDUL_ARTIKEL'];
                                        ?>
                                        </b>
                                        <p>
                                            <?php echo $value_artikel_terbaru['TANGGAL_ARTIKEL'];?> by 
                                            <?php echo $value_artikel_terbaru['PENULIS_ARTIKEL'];?>
                                        </p>
                                    </div>
                                </div>
                            </a></li>
                        <?php
                    }
                    ?>
                    <li><a href="<?php echo base_url(); echo 'pages/artikel/';?>">
                        <div class="row">
                            <center>
                                Lihat yang Lain ...
                            </center>
                        </div>
                    </a></li>
                </ul>
            </div>
            <div class="col-sm-4 blog-sidebar">
                <h4>Agenda Terbaru</h4>
                <ul class="recent-posts">
                    <?php
                    foreach ($agenda_terbaru as $key_agenda_terbaru => $value_agenda_terbaru) {
                        ?>
                            <li><a href="#">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php
                                        if (!empty($value_agenda_terbaru['PATH_AGENDA'])){
                                            echo "<img src='".base_url().$value_agenda_terbaru['PATH_AGENDA']."' style='width:100%; position:center'>";
                                        }
                                        else {?>
                                        <img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        echo $value_agenda_terbaru['TANGGAL_AGENDA'];
                                        ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        echo $value_agenda_terbaru['ISI_AGENDA'];
                                        ?>
                                        di :
                                        <?php
                                        echo $value_agenda_terbaru['TEMPAT_AGENDA'];
                                        ?>
                                    </div>
                                </div>
                            </a></li>
                        <?php
                    }
                    ?>
                    <li><a href="">
                        <div class="row">
                            <center>
                                Lihat yang Lain ...
                            </center>
                        </div>
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Navigasi</h1>
            </div>
        </div>
    </div>
</div>
<div class="section container">
    <center>
        <h1>
            <i>Jelajahi situs ini</i>
        </h1>
        <h4>
            <i>
                "Rasakan Pengalaman Yang Belum Pernah Anda Rasakan Sebelumnya"
            </i>
        </h4>
    </center>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <center>
                    <h2>Baca Artikel</h2>
                    <img src="<?php echo base_url()?>assets/userfile/artikel.png" class="menu-icon">
                </center>
                <a href="artikel">
                    <div class="panel-footer ">
                        <h4>Baca Artikel Mentoring</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <center>
                    <h2>Baca Materi</h2>
                    <img src="<?php echo base_url()?>assets/userfile/materi.png" class="menu-icon">
                </center>
                <a href="materi/tulisan">
                    <div class="panel-footer ">
                        <h4>Baca Materi yang ditulis oleh mentor</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <center>
                    <h2>Download File</h2>
                    <img src="<?php echo base_url()?>assets/userfile/download.png" class="menu-icon">
                </center>
                <a href="materi/file">
                    <div class="panel-footer ">
                        <h4>Download File Materi yang diberikan</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default menu" id="menu_1">
                <center>
                    <h2>Baca Artikel</h2>
                    <img src="<?php echo base_url()?>assets/userfile/artikel.png" class="menu-icon">
                </center>
                <a href="">
                    <div class="panel-footer">
                        <h4>Baca Artikel yang berkaitan dengan Mentoring</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.menu{
    border: 1px solid #DDD;
    padding: 5%;
};
.menu-caption{
    text-align: center;
}
.menu-icon{
    
}
</style>