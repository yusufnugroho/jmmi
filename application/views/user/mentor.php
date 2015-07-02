<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Profile</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User Profile
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> NRP</th>
                                    <th class='text-center'> Nama Lengkap</th>
                                    <th class='text-center'> Jenis Kelamin </th>
                                    <th class='text-center'> Telepon</th>
                                    <th class='text-center'> Status</th>
                                    <th class='text-center'> NRP Koordinator Jurusan</th>
                                    <th class='text-center'> Nama Koordinator Jurusanr</th>
                                    <th class='text-center'> Telepon Koordinator Jurusan</th>
                                    <th class='text-center'> Status Koordinator Jurusan</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                    $row = $session;
                                    {
                                ?>
                                    <tr>
                                            <td> <?php echo $row[1];?></td>
                                            <td> <?php echo $row[2];?></td>
                                            <td> <?php echo $row[3];?></td>
                                            <td> <?php echo $row[4];?></td>
                                            <td> <?php echo $row[5];?></td>
                                            <td> <?php echo $row[6];?></td>
                                            <td> <?php echo $row[7];?></td>
                                            <td> <?php echo $row[8];?></td>
                                            <td> <?php echo $row[9];?></td>
                                    </tr>
                                <?php
                                    
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