    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manajemen Halaman kontak
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Peta
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <center>

                            <form role="form" action='<?php echo base_url()."managepage/ubah_maps";?>' method='post'>
                                <iframe src="<?php echo $maps_kontak[0]['content_content']?>" style="width: 100%; min-widt" width="360" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <input type='text' name='maps_update_content' class="form-control maps_form" required placeholder="Isi" value="<?php echo $maps_kontak[0]['content_content']?>">
                                <input type="hidden" value="<?php echo base_url().'managepage/kontak'?>" name="return_link">
                                <input type="hidden" value="<?php echo $maps_kontak[0]['id_content']?>" name="id_content">
                                <input type="hidden" value="kontak" name="managing">
                                <button class="btn btn-warning btn-sm" type="button" id="maps_update">
                                    Ganti Posisi
                                </button>
                                <button class="btn btn-info btn-sm maps_form" type="submit">
                                    Ganti Posisi
                                </button>
                                <button class="btn btn-danger btn-sm maps_form" type="button" id="maps_cancel">
                                    Kembali
                                </button>
                            </form>
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
                        List Kontak
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
                                foreach ($list_kontak as $value_content) 
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
                                            <form role="form" action='<?php echo base_url()."managepage/hapus_list";?>' method='post'>
                                                <input type="hidden" value="<?php echo base_url().'managepage/kontak'?>" name="return_link">
                                                <input type="hidden" value="kontak" name="managing">
                                                <input type="hidden" value="<?php echo $value_content['id_content'] ?>" name="id_list">
                                                <input type="submit" onClick="return confirm('Hapus List Ini?')" class="btn btn-danger" value="Hapus">
                                            </form>
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
                                    <input type="hidden" value="<?php echo base_url().'managepage/kontak'?>" name="return_link">
                                    <input type="hidden" value="kontak" name="managing">
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
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script>
// HIDE INITIAL FORM
$(".list_form").hide();
$(".maps_form").hide();

// EVENT CLICK FOR LIST 
$("#list_add").click(function(){
    $(".list_form").show();
    $(this).hide();
});
$("#list_cancel").click(function(){
    $(".list_form").hide();
    $("#list_add").show();
});

// EVENT CLICK FOR MAPS
$("#maps_update").click(function(){
    $(".maps_form").show();
    $(this).hide();
});
$("#maps_cancel").click(function(){
    $(".maps_form").hide();
    $("#maps_update").show();
});
</script>