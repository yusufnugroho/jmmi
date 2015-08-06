<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Mente Baru</h1>
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
                            Masukkan data Mente
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/mente/insertmente' method='post'>
                                        <div class="form-group">
                                            <label>NRP Mente</label>
                                            <input type='text' name='nrpmente'class="form-control">
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='frontname'class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='endname'class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmente" id="L" value="L">Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmente" id="P" value="P">Akhwat
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hpmente'class="form-control">
                                        </div> 
                                        <div class="form-group">
                                            <label>NRP - Nama Mentor</label>
                                            <select name='nrpmentor' class="form-control"required>
                                            <option> </option>
                                            <?php
                                                foreach ($mentor->result() as $row)
                                                {
                                                    echo '<option value='.$row->NRP_MENTOR.'>';
                                                    echo $row->NRP_MENTOR." - ";
                                                    echo $row->NAMA_DEPAN_MENTOR." ";
                                                    echo $row->NAMA_BELAKANG_MENTOR;
                                                    echo '</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>           
                                        <div class="form-group">
                                            <label>NIP - Nama Dosen</label>
                                            <select name='nipdosen' class="form-control"required>
                                            <option> </option>
                                            <?php
                                                foreach ($dosen->result() as $row)
                                                {
                                                    echo '<option value='.$row->NIP_DOSEN.'>';
                                                    echo $row->NIP_DOSEN." - ";
                                                    echo $row->NAMA_DEPAN_DOSEN." ";
                                                    echo $row->NAMA_BELAKANG_DOSEN;
                                                    echo '</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>                   
                                        <div>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
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
    
<!--FOOTER-->