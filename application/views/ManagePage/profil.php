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
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#change_pp">
                            Ganti Foto/Logo BPM
                        </button>
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
                        <a class="btn btn-sm btn-info">Tambah</a>
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
                        Moto Bawah
                        <a class="btn btn-sm btn-warning">Edit</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <center>
                            <h3>
                                <?php echo $moto_profil[0]['label_content']?>
                            </h3>
                        </center>
                        <blockquote>
                            <?php echo $moto_profil[0]['content_content']?>
                        </blockquote>
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
            <form role="form" action='' method='post' id="form_select_kj" enctype="multipart/form-data">
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
