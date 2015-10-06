    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manajemen Halaman Profil
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Foto/Logo BPM
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <img src="<?php echo $foto?>" style="width: 100%">
                        <hr>
                        Logo BPM
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List Profil
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        List Profil -datatable-
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <div class="row">
            <center>
                Semangat Penutup
            </center>
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
                            <input name="userFile" type="file" tabindex="1" value="NULL"  required/> 
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
