    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php
                    foreach ($data_apply_mentor as $key => $value) {
                        echo $value->nama_depan;
                        echo $value->nama_belakang;
                    }
                    ?>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php
        foreach ($data_apply_mentor as $key => $value) {
            ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Data Diri</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                NRP
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->nrp;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                Nama Depan
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->nama_depan;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                Nama Belakang
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->nama_belakang;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->jenis_kelamin;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                Email
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->email;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                No. Telp
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->hp;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                IPK
                            </div>
                            <div class="col-lg-8">
                                : <?php echo $value->ipk;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Data Mentoring</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            Mentor Saat Ini
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->mentor_sekarang;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Kondisi Mentoring
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->kondisi;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Amal Yaumi</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            Shalat Wajib Berjamaah
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->wajib;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Tilawatil Quran
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->tilawatil;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Wirid Alma'tsurat
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->wirid;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Shalat Dhuha
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->dhuha;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Shalat Malam
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->malam;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Bacaan Favorit
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->bacaan;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Motivasi dan Saran</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            Motivasi 
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->motivasi;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            Saran 
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $value->saran;?>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#row -->
        <?php
    }
    ?>

</div>
<!-- /#wrapper -->
<!--Footer-->