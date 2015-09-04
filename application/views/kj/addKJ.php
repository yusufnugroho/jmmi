<!--Header-->
<!--Navbar-->
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambahkan Koordinator Jurusan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                if ($notification == "duplicate"){
                    ?>
                    <div class="alert alert-danger">
                        <b><i>NRP Koordinator Jurusan </i> sudah terdaftar</b>. Anda tidak dapat menambahkan <b>Koordinator Jurusan</b> dengan <b><i>NRP Koordinator Jurusan</i></b> yang sama. Lihat <b>Daftar Koordinator Jurusan</b> untuk Melihat Daftar Koordinator Jurusan
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
                            Masukkan Data Koordinator Jurusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/kj/insertkj' method='post'>
                                        <div class="form-group">
                                            <label>NRP Koordinator Jurusan</label>
                                            <input type='text' name='nrpkj'class="form-control" required>
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
                                            <label>Jenis Kelamin</label>
                                            <div class="radio" required>
                                                <label>
                                                    <input type="radio" name="jkkj" id="L" value="L">Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkkj" id="P" value="P">Akhwat
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpkj'class="form-control" required>
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