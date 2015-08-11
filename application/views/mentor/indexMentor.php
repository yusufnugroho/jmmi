<!--Header-->
<!--Navbar-->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Mentor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Mentor JMMI 15/16
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Telepon</th>
                                            <th>Status</th>    
                                            <th>Action</th>    
                                        </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach($mentor->result() as $row){

                                        echo '<tr><td>'. $row->NRP_MENTOR .'</td>
                                            <td>'. $row->NAMA_DEPAN_MENTOR." ". $row->NAMA_BELAKANG_MENTOR.'</td>
                                            <td>'. $row->jk_mentor .'
                                            <td>'. $row->TELEPON_MENTOR .'</td>
                                            <td> 
                                            ';
                                            $status=$row->STATUS_MENTOR;
                                                if($session == 'mentor'){  
                                                    if($status == "Aktif")
                                                    {
                                                        echo '<a href='. base_url()."index.php/mentor/deactive/".$row->NRP_MENTOR.' class="btn btn-success">Activated</a>';
                                                    }
                                                    elseif($status == "Tidak Aktif")
                                                    {
                                                        echo '<a href='. base_url()."index.php/mentor/active/".$row->NRP_MENTOR.' class="btn btn-danger">Deactivated</a>';
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
                                            echo '</td>';
                                            if($session =='mentor')
                                                echo '<td> 
                                                <a href='. base_url()."index.php/mentor/update/".$row->NRP_MENTOR.' class="btn btn-warning"> Edit</a>
                                                <a href='. base_url()."index.php/mentor/hapus/".$row->NRP_MENTOR.' class="btn btn-danger"> Hapus </a> </td></tr>';
                                            else echo '<td> </td>';
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