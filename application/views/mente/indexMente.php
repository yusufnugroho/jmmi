<!--Header-->


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Mente</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    <?php
        if ($notification == "success"){
            ?>
            <div class="alert alert-success">
                <b><i>Mente </i> Berhasil Ditambahkan</b>.
            </div>
            <?php
        }
        ?>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Mente
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>NRP</th>
                                    <th>NRP Mentor</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telepon</th>
                                    <th>Mentor</th>
                                    <th>Dosen</th>
                                    <th>Nilai</th>
                                    <th>Status</th>    
                                    <th>Action</th>    
                                </tr>   
                            </thead>
                            <tbody>

                                <?php
                                foreach ($mente as $key => $value) {

                                    echo '<tr>
                                    <td>'. $value['NRP_MENTE'] .'</td>
                                    <td>'. $value['NRP_MENTOR'] .'</td>
                                    <td>'. $value['NAMA_DEPAN_MENTE']." ". $value['NAMA_BELAKANG_MENTE'].'</td>
                                    <td>'.$value['JK_MENTE'].'</td>
                                    <td>'. $value['TELEPON_MENTE'] .'</td>
                                    <td>'. $value['NRP_MENTOR'].'</td>
                                    <td>'. $value['NIP_DOSEN'].'</td>
                                    <td>'. $value['NILAI_MENTE'].'</td>
                                    <td>'; 
                                        $status=$value['STATUS_MENTE'];
                                        if($session == 'admin' || $session == 'mentor'){  
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."index.php/mente/deactive/".$value['NRP_MENTE'].' class="btn btn-success">Activated</a>';
                                            }
                                            elseif($status == "Tidak Aktif")
                                            {
                                               echo '<a href='. base_url()."index.php/mente/active/".$value['NRP_MENTE'].' class="btn btn-danger">Deactivated</a>';
                                           };
                                        }
                                        else {
                                            if($status == "Aktif")
                                            {
                                                echo "<a href='#' class='btn btn-success'>Activated</a>";
                                            }
                                            elseif($status == "Tidak Aktif")
                                            {
                                               echo "<a href='#' class='btn btn-danger'>Deactivated</a>";
                                           };
                                        }
                                       echo '<td>';
                                       if($session == 'admin' || $session == 'mentor'|| $session == 'kj') echo '
                                       <a href='. base_url()."index.php/mente/nilaiBaru/".$value['NRP_MENTE'].' class="btn btn-info"> Nilai</a>
                                       <a href='. base_url()."index.php/mente/update/".$value['NRP_MENTE'].' class="btn btn-warning"> Edit</a>
                                       <a href='. base_url()."index.php/mente/hapus/".$value['NRP_MENTE'].' class="btn btn-danger"> Hapus </a> </td></tr>';    
                                   }       
                                   ?>
                               </tbody>
                           </table>
                       <?php 
                       if($session == 'admin' || $session == 'mentor')
                        echo '<a href='. base_url()."index.php/download/nilai".' class="btn btn-info"> Unduh Nilai Keseluruhan</a>';
                      ?>

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