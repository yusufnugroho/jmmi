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
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."index.php/dosen/deactive/".$row->NIP_DOSEN.' class="btn btn-success">Deactive</a>';
                                            }
                                             elseif($status == "Tidak Aktif")
                                             {
                                                 echo '<a href='. base_url()."index.php/dosen/active/".$row->NIP_DOSEN.' class="btn btn-success">Active</a>';
                                             };echo '</ td>';
                                             
                                            echo '<td> <a href='. base_url()."index.php/dosen/update/".$row->NIP_DOSEN.' class="btn btn-primary"> Edit</a>
                                            </td></tr>';
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