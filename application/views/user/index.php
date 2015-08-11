    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php
                    echo $session[2];
                    ?>
                    <a href='<?php echo base_url()."user/settings"?>' class="btn btn-warning"> Settings</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profil <?php echo $session[0];?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <center>
                                    <img src="<?php echo $foto?>" style="width: 100%">
                                    <?php
                                    if ($session[0] == 'mentor'){
                                        ?>
                                        <hr>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#change_pp">
                                            Ganti Foto Profil
                                        </button>
                                        <?php
                                    }
                                    ?>

                                </center>
                            </div>
                            <div class="col-lg-8">
                                <?php
                                $adder = 1;
                                for ($i=0; $i < count($field); $i++) { 
                                    if ($field[$i] == 'hr'){
                                        ?>
                                        <hr>
                                        <?php
                                        $adder--;
                                    }
                                    else {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>
                                                <?php
                                                echo $field[$i];
                                                ?>
                                                </h4>
                                            </div>
                                            <div class="col-md-8">
                                                <h4> :
                                                <?php
                                                echo $session[$i+$adder];
                                                ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>       
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<div class="modal fade" id="change_pp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action='<?php echo base_url();?>user/GantiPP/<?php echo $session[1]; ?>' method='post' id="form_select_kj" enctype="multipart/form-data">
                <div class="modal-header">
                    Ganti Foto
                </div>
                <div class="modal-body">
                        <div class="col-lg-12">
                            Klik Tombol "Pilih File" untuk mengupload foto, lalu Tekan Tombol "Ganti Foto"
                        </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4"> 
                            <input name="userFile" type="file" tabindex="1" value="NULL" /> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ganti Foto</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
