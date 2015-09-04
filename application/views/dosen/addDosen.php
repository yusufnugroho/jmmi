<!--Header-->
<!--Navbar-->
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambahkan Data Dosen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                if ($notification == "duplicate"){
                    ?>
                    <div class="alert alert-danger">
                        <b><i>NIP Dosen </i> sudah terdaftar</b>. Anda tidak dapat menambahkan <b>Dosen</b> dengan <b><i>NIP Dosen</i></b> yang sama. Lihat <b>Daftar Dosen</b> untuk Melihat Daftar Dosen
                    </div>
                    <?php
                }
                ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan Data Dosen
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/dosen/insertDosen' method='post'>
                                        <div class="form-group">
                                            <label>NIP Dosen</label>
                                            <input type='text' name='nip'class="form-control" required>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='frontname'class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='endname'class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpdosen'class="form-control" required>
                                        </div> 
                                        <div>
                                            <button type="submit" class="btn btn-default">Kirim</button>
                                            <button type="reset" class="btn btn-default">Bersihkan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!--Footer-->