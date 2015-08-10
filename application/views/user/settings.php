    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php
                    echo $form_value[0]." ".$form_value[1];
                    ?>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php
        if ($valid == 'no'){
            ?>
            <div class="alert alert-danger">
                <p>Password yang Anda Masukkan Salah</p>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profil Dosen
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                            <form role="form" action='<?php echo base_url();?>user/update/<?php echo "$session[0]"?>' method='post'>
                                <?php
                                for ($i=0; $i < count($form_name) ; $i++) { 
                                ?>
                                    <div class="form-group">
                                        <label><?php echo $form_label[$i]?></label>
                                        <input type='<?php echo $form_type[$i]?>' name='<?php echo $form_name[$i]?>' class="form-control" value = "<?php echo $form_value[$i]?>">
                                        <?php
                                        if ($form_type[$i] =='password'){
                                            ?>
                                                <p class="help-block">* Masukkan Password Anda untuk Mengubah Data</p>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div>
                                    <button type="submit" class="btn btn-default">Update </button>
                                </div>
                            </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ganti Password
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form role="form" action='<?php echo base_url();?>user/update/<?php echo "$session[0]"?>' method='post'>
                            <div class="form-group">
                                <label>Isikan Password Lama</label>
                                <input type='password' name='pw_lama1' id="pw_lama1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Lama Lagi</label>
                                <input type='password' name='pw_lama2' id="pw_lama2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Baru</label>
                                <input type='password' name='pw_baru1' id="pw_baru1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Baru Lagi</label>
                                <input type='password' name='pw_baru2' id="pw_baru2" class="form-control">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Update </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!--Footer-->