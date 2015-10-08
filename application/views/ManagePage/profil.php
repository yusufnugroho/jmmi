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
                        <center>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#change_pp">
                                Ganti Foto/Logo BPM
                            </button>
                        </center>
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
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class='text-center'> No</th>
                                        <th class='text-center'> Label</th>
                                        <th class='text-center'> Isi</th>
                                        <th class='text-center' width='14%'>Action</th>
                                    </tr>   
                                </thead>
                                <tbody>                                
                                <?php
                                $no = 1;
                                foreach ($list_profil as $value_content) 
                                    {
                                    ?>
                                    <tr>
                                        <td> <?php echo $no;?>
                                        <td> <?php echo $value_content['label_content'];?></td>
                                        <td>    <?php 
                                            $isiFile = $value_content['content_content'];
                                            $isiFile = substr(htmlspecialchars_decode($isiFile), 0, 50);
                                            echo $isiFile;
                                        ?>...</td>
                                        <td>
                                            <a href="<?php echo base_url();?>managepage/delete_listprofil/<?php echo $value_content['id_content'];?>" onClick="return confirm('Delete This Artikel?')" class="btn btn-danger" value="Hapus">Hapus</a>
                                        </td>   
                                    </tr>
                                    <?php
                                    $no++;
                                }
                                ?>
                                
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="row">
                                <form role="form" action='<?php echo base_url()."managepage/tambah_list";?>' method='post'>
                                    <input type="hidden" value="<?php echo base_url().'managepage/profil'?>" name="return_link">
                                    <input type="hidden" value="profil" name="managing">
                                    <div class="col-md-4">
                                        <input type='text' name='list_add_label' class="form-control list_form" required placeholder="Label">
                                    </div>
                                    <div class="col-md-4">
                                        <input type='text' name='list_add_content' class="form-control list_form" required placeholder="Isi">
                                    </div>
                                    <div class="col-md-4">
                                        <input type='submit' value="Tambahkan" class="btn btn-primary list_form">
                                        <a class="btn btn-md btn-info" id="list_add" style="float: right">Tambah List</a>
                                        <a class="btn btn-md btn-danger list_form" id="list_cancel" style="float: right">Kembali</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Moto
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form role="form" action='<?php echo base_url();?>' method='post'>
                            <center>
                                <input type="hidden" value="<?php echo base_url().'managepage/profil'?>" name="return_link">
                                <input type="hidden" value="profil" name="managing">
                                <input type='text' name='moto_edit_label' class="form-control moto_form" required placeholder="Label" value="<?php echo $moto_profil[0]['label_content']?>">
                                <h3 class="moto_text">
                                    <?php echo $moto_profil[0]['label_content']?>
                                </h3>
                            </center>
                            <br>
                            <textarea type='textarea' name='moto_edit_content' class="form-control moto_form" required placeholder="Isi"><?php echo $moto_profil[0]['content_content']?></textarea>
                            <blockquote class="moto_text">
                                <?php echo $moto_profil[0]['content_content']?>
                            </blockquote>
                            <hr>
                            <a class="btn btn-sm btn-warning moto_text" style="float: right" id="moto_edit">Edit</a>
                            <a class="btn btn-md btn-danger moto_form" id="moto_cancel" style="float: right">Kembali</a>
                            <input type='submit' value="Ubah" class="btn btn-info moto_form" style="float:right;">
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
<div class="modal fade" id="change_pp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action='<?php echo base_url(); echo "managepage/ubah_foto"?>' method='post' enctype="multipart/form-data">
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
                            <input type="hidden" value="<?php echo $logo_profil[0]['id_content']?>" name="id_foto">
                            <input type="hidden" value="<?php echo base_url().'managepage/profil'?>" name="return_link">
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
<script>
// HIDE INITIAL FORM
$(".list_form").hide();
$(".moto_form").hide();

// EVENT CLICK FOR LIST 
$("#list_add").click(function(){
    $(".list_form").show();
    $(this).hide();
});
$("#list_cancel").click(function(){
    $(".list_form").hide();
    $("#list_add").show();
});

// EVENT CLICK FOR MOTTO
$("#moto_edit").click(function(){
    $(".moto_form").show();
    $(".moto_text").hide();
    $(this).hide();
});
$("#moto_cancel").click(function(){
    $(".moto_form").hide();
    $("#moto_update").show();
    $(".moto_text").show();
});
</script>