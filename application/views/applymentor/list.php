<!DOCTYPE html>
<html lang="en">

<head>
<title>Mentoring JMMI</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Peserta Sipenmaru</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Peserta yang telah Mendaftar Sipenmaru
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> No</th>
                                    <th class='text-center'> NRP</th>
                                    <th class='text-center'> Nama</th>
                                    <th class='text-center'> IPK</th>
                                    <th class='text-center'> Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                $no = 0;
                                foreach ($applicant as $row) {
                                    $no++;
                                    ?>
                                    <tr>
                                        <td> <?php echo $no;?>
                                        <td> <?php echo $row->nrp;?></td>
                                        <td> <?php echo $row->nama_depan." ".$row->nama_belakang;?></td>
                                        <td> <?php echo $row->ipk;?></td>
                                        <td>
                                            
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#select_kj" onclick="change_kj(this)" id="<?php echo $row->nrp?>">
                                                Terima Mentor
                                            </button>
                                            <?php
                                            echo '
                                            <a href='. base_url()."mentor/detailMentorSipenmaru/".$row->nrp.' class="btn btn-info"> Detail</a>
                                            ';?>
                                            
                                        </td>   
                                    </tr>
                                    <?php ;}
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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
<!--Footer-->
<div class="modal fade" id="select_kj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action='<?php echo base_url();?>pages/sipenmaru/terimaMentor/' method='post' id="form_select_kj">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" id="myModalLabel">Koordinator Jurusan</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Pilih Koordinator Jurusan Untuk Calon Mentor :</p>
                            <p id="nama_mentor">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"> Koordinator Jurusan </div>
                        <div class="col-lg-8"> 
                            <div class="form-group">
                                <select multiple="" class="form-control" name="kj">
                                    <?php
                                    foreach ($kj as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value->NRP_KJ?>"><?php echo $value->NAMA_DEPAN_KJ." ".$value->NAMA_BELAKANG_KJ;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Terima Mentor</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
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
    var target = "<?php echo base_url().'mentor/terimaMentor/';?>";
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    function change_kj(var2){
        $("#form_select_kj").attr("action", target+var2.id);
    }
    </script>
</body>

</html>
