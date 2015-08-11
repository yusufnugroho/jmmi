
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
        else if ($valid == 'match'){
            ?>
            <div class="alert alert-danger">
                <p>Password yang Anda Masukkan Tidak Cocok</p>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Setting
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                            <form role="form" action='<?php echo base_url();?>user/update/<?php echo "$session[0]"?>' method='post'>
                                <?php
                                for ($i=0; $i < count($form_name) ; $i++) { 
                                    if ($form_type[$i] != "radio"){
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
                                    else if ($form_label[$i] == "Jenis Kelamin") {

                                        ?>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmentor" id="L" value="L" <?php if(isset($form_value[$i]) && $form_value[$i] == "L") echo "checked"?>>Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jkmentor" id="P" value="P" <?php if(isset($form_value[$i]) && $form_value[$i] == "P") echo "checked"?>>Akhwat
                                                </label>
                                            </div>
                                        </div>
                                        <?php
                                    }
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
                        <form role="form" action='<?php echo base_url();?>user/gantiPassword/<?php echo $session[1]?>' method='post'>
                            <input type='hidden' name='akses' id="akses" class="form-control" value="<?php echo $session[0]?>">
                            <div class="form-group">
                                <label>Isikan Password Lama</label>
                                <input type='password' name='pw_lama1' id="pw_lama1" class="form-control" onfocusout="Validation(this.id)">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Lama Lagi</label>
                                <input type='password' name='pw_lama2' id="pw_lama2" class="form-control" onfocusout="Validation(this.name)">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Baru</label>
                                <input type='password' name='pw_baru1' id="pw_baru1" class="form-control" onfocusout="Validation(this.name)">
                            </div>
                            <div class="form-group">
                                <label>Isikan Password Baru Lagi</label>
                                <input type='password' name='pw_baru2' id="pw_baru2" class="form-control" onfocusout="Validation(this.name)">
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
<script type="text/javascript">
function Validation(myId){

}
</script>