<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
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
                                    <?php foreach($mente->result() as $row){

                                        echo '<tr>
                                            <td>'. $row->NRP_MENTE .'</td>
                                            <td>'. $row->NRP_MENTOR .'</td>
                                            <td>'. $row->NAMA_DEPAN_MENTE." ". $row->NAMA_BELAKANG_MENTE.'</td>
                                            <td>'.$row->JK_MENTE.'</td>
                                            <td>'. $row->TELEPON_MENTE .'</td>
                                            <td>'. $row->NRP_MENTOR.'</td>
                                            <td>'. $row->NIP_DOSEN.'</td>
                                            <td>'. $row->NILAI_MENTE.'</td>
                                            <td>'; 
                                            $status=$row->STATUS_MENTE;
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."index.php/mente/deactive/".$row->NRP_MENTE.' class="btn btn-success">Deactive</a>';
                                            }
                                             elseif($status == "Tidak Aktif")
                                             {
                                                 echo '<a href='. base_url()."index.php/mente/active/".$row->NRP_MENTE.' class="btn btn-success">Active</a>';
                                             };
                                             echo '<td>';
                                               echo '<a href='. base_url()."index.php/mente/update/".$row->NRP_MENTE.' class="btn btn-warning"> Edit</a>
                                            <a href='. base_url()."index.php/mente/hapus/".$row->NRP_MENTE.' class="btn btn-danger"> Hapus </a> </td></tr>';    
                                    }       
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