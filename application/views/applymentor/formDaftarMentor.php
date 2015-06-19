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
                <!--Header-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulir Pendaftaran Mentor 2015/2016</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <p>Siapakah yang lebih baik perkataannya daripada orang yang menyeru kepada Allah, mengerjakan amal yang saleh dan berkata: "Sesungguhnya aku termasuk orang-orang yang berserah diri?"
(QS 41 : 33)</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-1">
                                    <form role="form" action='<?php echo base_url();?>index.php/mentor1516/doapply' method='post'>
                                    <div class="panel-heading">
                                        <h3> <strong> Data Diri </strong> </h3>
                                    </div>
                                        <div class="form-group">
                                            <label>NRP</label>
                                            <input type='text' name='nrp'class="form-control">
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type='text' name='nama_depan'class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type='text' name='nama_belakang'class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" id="L" value="L">Ikhwan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" id="P" value="P">Akhwat
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type='email' name='email'class="form-control">
                                        </div> 
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type='text' name='hp'class="form-control">
                                        </div> 
                                        <div class="form-group">
                                            <label>IPK</label>&nbsp &nbsp<snall>(dipisahkan dengan tanda titik)</snall>
                                            <input type='number'step="any" name='ipk'class="form-control">
                                        </div> 
                                        <div class="form-group">
                                            <label>Prestasi</label>
                                            <input type='textarea' name='prestasi'class="form-control">
                                        </div>
                                        <div class="panel-heading">
                                            <h3> <strong> Data Mentoring </strong> </h3>
                                        </div>
                                        <div class="form-group">
                                            <label>Mentor Saat Ini</label>
                                            <input type='text' name='mentor_sekarang'class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi Mentoring</label>
                                            <select name='kondisi' class="form-control"required>
                                                <option value="Rutin"> Rutin</option>
                                                <option value="Berhenti"> Berhenti</option>
                                            </select>
                                        </div>   
                                        <div class="panel-heading">
                                        <h3> <strong> Amal Yaumi </strong><br><small> Dihitung dalam satu pekan </small> </h3> 
                                        </div>    
                                        <div class="form-group">
                                            <label>Shalat Wajib Berjamaah di Awal Waktu</label>
                                            <input type='number' name='wajib'class="form-control col-md-1">
                                        </div> 
                                        <div class="form-group">
                                            <label>Tilawatil Quran</label>
                                            <input type='number' name='tilawatil'class="form-control col-md-1">
                                        </div> 
                                        <div class="form-group">
                                            <label>Wirid Alma'tsurat</label>
                                            <input type='number' name='wirid'class="form-control col-md-1">
                                        </div> 
                                        <div class="form-group">
                                            <label>Shalat Dhuha</label>
                                            <input type='number' name='dhuha'class="form-control col-md-1">
                                        </div>
                                        <div class="form-group">
                                            <label>Shalat Malam</label>
                                            <input type='number' name='malam'class="form-control col-md-1">
                                        </div>
                                        <div class="form-group">
                                            <label>Bacaan Favorit</label>
                                            <textarea style="height:90px"class="form-control col-lg-12" name='bacaan'></textarea>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="panel-heading">
                                            <h3> <strong> Motivasi dan Saran </strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <label>Motivasi Menjadi Mentor</label>
                                            <textarea style="height:90px"class="form-control col-lg-12"name='motivasi'></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Saran Untuk Pelaksanaan Mentoring Wajib atau Badan Pelaksana Mentoring</label>
                                            <textarea style="height:90px"class="form-control col-lg-12"name='saran'></textarea>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="panel-heading">
                                        <h3><strong> Pernyataan Komitmen</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                            Komitmen Saya (ditulis ulang) *</label>
                                            <label>
“Saya menyatakan bahwa data yang telah saya isi di atas adalah benar dan dapat dipertanggung jawabkan, dan saya berkomitmen akan mengikuti segala bentuk pembinaan dari BPM JMMI ITS jika diterima menjadi mentor, serta siap menerima sangsi jika melanggar aturan yang telah dibuat.”</label>
                                            <textarea style="height:90px"class="col-lg-12"name='komitmen'></textarea>
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
