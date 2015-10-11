<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambahkan Mentor Baru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                if ($notification == "duplicate"){
                    ?>
                    <div class="alert alert-danger">
                        <b><i>NRP Mentor </i> sudah terdaftar</b>. Anda tidak dapat menambahkan <b>Mentor</b> dengan <b><i>NRP Mentor</i></b> yang sama. Lihat <b>Daftar Mentor</b> untuk Melihat Daftar Mentor
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
                    <?php
                    if ($status_kj == 'Aktif' || $akses != 'kj'){
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan data Mentor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/mentor/insertmentor' method='post'>
                                        <div class="form-group">
                                            <label>NRP Mentor</label>
                                            <input type='text' name='nrpmentor'class="form-control" required>
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
                                                    <input type="radio" name="jkmentor" id="L" value="L">Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmentor" id="P" value="P">Akhwat
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpmentor'class="form-control" required>
                                        </div> 
                                        <div class="form-group">
                                            <label>NRP - Nama KJ</label>
                                            <select name='nrpkj' class="form-control" required <?php if ($akses == 'kj') echo "disabled"?>>
                                            <option> </option>
                                            <?php
                                                foreach ($kj->result() as $row)
                                                {
                                                    $adder = '';
                                                    if ($akses == 'kj' && $my_nrp == $row->NRP_KJ) $adder = ' selected ';
                                                    echo '<option value='.$row->NRP_KJ.$adder.'>';
                                                    echo $row->NRP_KJ." ";
                                                    echo $row->NAMA_DEPAN_KJ." ";
                                                    echo $row->NAMA_BELAKANG_KJ;
                                                    echo '</option>';
                                                }
                                            ?>
                                            </select>
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
                    <?php
                    }
                    else{
                    ?>
                    <div class="alert alert-danger">
                        <b>
                            Status Anda sedang <i> Tidak Aktif </i>, tidak diperkenankan menambah mentor
                        </b>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!--FOOTER-->