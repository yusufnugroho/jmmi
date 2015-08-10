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
            <h1 class="page-header">Detail Peserta Sipenmaru</h1>
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
                                    <th class='text-center'> NRP</th>
                                    <th class='text-center'> Nama Lengkap</th>
                                    <th class='text-center'> IPK</th>
                                    <th class='text-center'>Jenis Kelamin</th>
                                    <th class='text-center'>Email</th>
                                    <th class='text-center'>Handphone</th>
                                    <th class='text-center'>Mentor Sekarang</th>
                                    <th class='text-center'>Sholat Wajib</th>
                                    <th class='text-center'>Tilawatil</th>
                                    <th class='text-center'>Sholat Dhuha</th>
                                    <th class='text-center'>Sholat Malam</th>
                                    <th class='text-center'>Bacaan</th>
                                    <th class='text-center'>Motivasi</th>
                                    <th class='text-center'>Saran</th>
                                    <th class='text-center'>Komitmen</th>
                                    <th class='text-center'>Wirid</th>
                                    <th class='text-center'> Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                $no = 1;
                                foreach ($data_apply_mentor as $row) 
                                {
                                    ?>
                                    <tr>
                                        <td> <?php echo $row->nrp;?></td>
                                        <td> <?php echo $row->nama_depan." ".$row->nama_belakang;?></td>
                                        <td> <?php echo $row->ipk;?></td>
                                        <td> <?php echo $row->jenis_kelamin;?></td>
                                        <td> <?php echo $row->email;?></td>
                                        <td> <?php echo $row->hp;?></td>
                                        <td> <?php echo $row->mentor_sekarang;?></td>
                                        <td> <?php echo $row->wajib;?></td>
                                        <td> <?php echo $row->tilawatil;?></td>
                                        <td> <?php echo $row->dhuha;?></td>
                                        <td> <?php echo $row->malam;?></td>
                                        <td> <?php echo $row->bacaan;?></td>
                                        <td> <?php echo $row->motivasi;?></td>
                                        <td> <?php echo $row->saran;?></td>
                                        <td> <?php echo $row->komitmen;?></td>
                                        <td> <?php echo $row->wirid;?></td>

                                        <td>
                                            <a href="#" class="btn btn-primary" value="Lihat">Terima Mentor</a>
                                        </td>   
                                    </tr>
                                    <?php 
                                        ;}
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
