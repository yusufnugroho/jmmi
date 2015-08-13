<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tag</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tag Materi
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tag Materi</th>
                                            <th>Action</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $enum = 1;
                                    foreach($tag as $row)
                                    {


                                        echo '<tr><td>'. $enum .'</td>
                                            <td>'. $row['TAG'] .'</td>
                                            <td>'; 
                                            if($session == 'admin')
                                            {
                                                    echo '<a href='. base_url()."materi/hapusTag/".$row['ID_TAG'].' class="btn btn-warning"  onclick="return confirm("Are you sure you want to delete this item?");">Hapus</a>';
                                            }
                                            else {
                                                   echo "<a href='#' class='btn btn-danger'>Anda Bukan Admin!</a>";
                                               
                                            }
                                            echo '</ td>';
                                            /*
                                            if($session == 'admin')
                                            echo '<td> <a href='. base_url()."index.php/dosen/update/".$row->NIP_DOSEN.' class="btn btn-primary"> Edit</a>
                                            </td></tr>';*/
                                            echo '<td></td></tr>';
                                            $enum +=1; 
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