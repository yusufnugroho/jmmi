
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
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Agenda Terdekat</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <?php
            foreach ($agenda_terbaru as $key_agenda => $value_agenda) {
                ?>
                    <div class="col-lg-6">
                        <h3>
                        <?php 
                            echo $value_agenda['TANGGAL_AGENDA'];
                            echo ": ";
                            echo $value_agenda['ISI_AGENDA'];
                            echo " di ";
                            echo $value_agenda['TEMPAT_AGENDA'];
                        ?>
                        </h3>
                    </div>
                <?php
            }
            ?>
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