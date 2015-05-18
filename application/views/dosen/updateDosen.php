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
                            <?php foreach($dosen->result() as $dosen){
                                ?>
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/dosen/updateDosen/<?php echo $dosen->NIP_DOSEN;?>' method='post'>
                                        <div class="form-group">
                                            <label>NIP DOSEN</label>
                                            <input type='text' name='nipdosen'class="form-control" value="<?php echo $dosen->NIP_DOSEN;?>" disabled>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='frontname'class="form-control" value="<?php echo $dosen->NAMA_DEPAN_DOSEN;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='endname'class="form-control" value="<?php echo $dosen->NAMA_BELAKANG_DOSEN;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpdosen'class="form-control" value="<?php echo $dosen->TELEPON_DOSEN;?>">
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