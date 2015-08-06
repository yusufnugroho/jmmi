<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Koordinator Mentor Jurusan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Koordinator Jurusan
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach($kj->result() as $row)
                                    {

                                        echo '<tr><td>'. $row->NRP_KJ .'</td>
                                            <td>'. $row->NAMA_DEPAN_KJ." ". $row->NAMA_BELAKANG_KJ.'</td>
                                            <td>'. $row->TELEPON_KJ .'</td>
                                            <td>'; 
                                            $status=$row->STATUS_KJ;
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."index.php/kj/deactive/".$row->NRP_KJ.' class="btn btn-success">Activated</a>';
                                            }
                                             elseif($status == "Tidak Aktif")
                                             {
                                                 echo '<a href='. base_url()."index.php/kj/active/".$row->NRP_KJ.' class="btn btn-danger">Deactivated</a>';
                                             };echo '</ td>';
                                             
                                            echo '<td> <a href='. base_url()."index.php/kj/update/".$row->NRP_KJ.' class="btn btn-primary"> Edit</a>
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