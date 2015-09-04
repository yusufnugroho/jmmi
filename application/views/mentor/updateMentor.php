
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Mentor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan Data Mentor 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <?php foreach($all->result() as $mentor)
                                {
                                ?>
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/mentor/updatementor/<?php echo $mentor->NRP_MENTOR;?>' method='post'>
                                        <div class="form-group">
                                            <label>NRP Mentor</label>
                                            <input type='text' name='nrpmentor'class="form-control" value="<?php echo $mentor->NRP_MENTOR;?>" placeholder="<?php echo $mentor->NRP_MENTOR;?>" disabled>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='frontname'class="form-control" value="<?php echo $mentor->NAMA_DEPAN_MENTOR;?>" placeholder="<?php echo $mentor->NAMA_DEPAN_MENTOR;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='endname'class="form-control" value="<?php echo $mentor->NAMA_BELAKANG_MENTOR;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpmentor'class="form-control" value="<?php echo $mentor->TELEPON_MENTOR;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio" required>
                                                <label>
                                                    <input type="radio" name="jkmentor" id="L" value="L" <?php if(isset($mentor->jk_mentor) && $mentor->jk_mentor == "L") echo "checked"?>>Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmentor" id="P" value="P" <?php if(isset($mentor->jk_mentor) && $mentor->jk_mentor == "P") echo "checked"?>>Akhwat
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>NRP - Nama Koordinator Jurusan</label>
                                            <select name='nrpkj' class="form-control" required>
                                            <?php
                                                foreach ($kj->result() as $row)
                                                {
                                                    echo '<option value='.$row->NRP_KJ;
                                                    if ($row->NRP_KJ == $mentor->NRP_KJ){
                                                        echo " selected";
                                                    }
                                                    echo '>';
                                                    echo $row->NRP_KJ." - ";
                                                    echo $row->NAMA_DEPAN_KJ." ";
                                                    echo $row->NAMA_BELAKANG_KJ;
                                                    echo '</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>                     
                                        <div>
                                            <button type="submit" class="btn btn-default">Update</button>
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

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
