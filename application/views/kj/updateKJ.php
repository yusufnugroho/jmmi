<!--Header-->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
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
                            Masukkan data mentor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <?php foreach($kj->result() as $kj){
                                ?>
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/kj/updatekj/<?php echo $kj->NRP_KJ;?>' method='post'>
                                        <div class="form-group">
                                            <label>NRP Koordinator Jurusan</label>
                                            <input type='text' name='nrpkj'class="form-control" value="<?php echo $kj->NRP_KJ;?>" disabled>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='frontname'class="form-control" value="<?php echo $kj->NAMA_DEPAN_KJ;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='endname'class="form-control" value="<?php echo $kj->NAMA_BELAKANG_KJ;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpkj'class="form-control" value="<?php echo $kj->TELEPON_KJ;?>" required>
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
                                        <div>
                                            <button type="submit" class="btn btn-default">Update</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }
                            ?>
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