
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--Mente-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Mente<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/mente/">Daftar Mente</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/mente/addmente">Tambah Mente</a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--Mentor-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Mentor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/mentor/">Daftar Mentor</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/mentor/addmentor">Tambah Mentor</a>
                                </li>
                            </ul>
                        </li>
                        <!--Koordinator Jurusan-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Koordinator Jurusan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/kj/">Daftar Koordinator Jurusan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/kj/addkj">Tambah Koordinator Jurusan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
