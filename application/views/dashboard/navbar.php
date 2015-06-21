
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">JMMI MENTORING</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>dashboard/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--Artikel-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Artikel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>artikel/buatartikel">Buat Artikel</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>artikel">Daftar Artikel</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--Artikel-->
                        <!--Materi-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Materi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>materi/buatmateri">Buat Materi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>materi">Daftar Materi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>materi/unggahmateri">Unggah Materi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--Materi-->
                        <!--Agenda-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Agenda<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>agenda/addagenda">Tambah Agenda</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>agenda">Daftar Agenda</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--Agenda-->
                        <!--Mente-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Mente<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>mente/">Daftar Mente</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>mente/addmente">Tambah Mente</a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--Mentor-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Mentor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>mentor/">Daftar Mentor</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>mentor/addmentor">Tambah Mentor</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>mentor1516/">Sipenmaru Mentor</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url();?>mentor1516/applicant">Daftar Sipenmaru Mentor</a>
                                </li>
                            </ul>
                        </li>
                        <!--Koordinator Jurusan-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Koordinator Jurusan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>kj/">Daftar Koordinator Jurusan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>kj/addkj">Tambah Koordinator Jurusan</a>
                                </li>
                            </ul>
                        </li>
                        <!--Dosen-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Dosen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>dosen/">Daftar Dosen</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>dosen/addDosen">Tambah Dosen</a>
                                </li>
                            </ul>
                        </li>
                        <!--End Of NavBar-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
