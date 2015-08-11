<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dosen Jurusan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Dosen Jurusan
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach($dosen->result() as $row)
                                    {

                                        echo '<tr><td>'. $row->NIP_DOSEN .'</td>
                                            <td>'. $row->NAMA_DEPAN_DOSEN." ". $row->NAMA_BELAKANG_DOSEN.'</td>
                                            <td>'. $row->TELEPON_DOSEN .'</td>
                                            <td>'; 
                                            $status=$row->STATUS_DOSEN;
                                            if($session == 'mentor'){
                                                if($status == "Aktif")
                                                {
                                                    echo '<a href='. base_url()."index.php/dosen/deactive/".$row->NIP_DOSEN.' class="btn btn-success">Activated</a>';
                                                }
                                                elseif($status == "Tidak Aktif")
                                                {
                                                    echo '<a href='. base_url()."index.php/dosen/active/".$row->NIP_DOSEN.' class="btn btn-danger">Deactivated</a>';
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
                                            echo '</ td>';
                                            if($session == 'mentor')
                                            echo '<td> <a href='. base_url()."index.php/dosen/update/".$row->NIP_DOSEN.' class="btn btn-primary"> Edit</a>
                                            </td></tr>';
                                            else echo '<td></td></tr>'; 
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