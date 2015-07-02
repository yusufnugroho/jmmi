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
                                    <th class='text-center'> Nilai</th>
                                    <th class='text-center'> Status</th>
                                    <th class='text-center'> NRP Mentor</th>
                                    <th class='text-center'> Nama Mentor</th>
                                    <th class='text-center'> Telepon Mentor</th>
                                    <th class='text-center'> Status Mentor</th>
                                    <th class='text-center'> NIP Dosen</th>
                                    <th class='text-center'> Nama Dosen</th>
                                    <th class='text-center'> Telepon Dosen</th>
                                    <th class='text-center'> Status Dosen</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                    /*

                                     *1 $session[] = $this->session->userdata('id');
                                        $session[] = $this->session->userdata('nama_depan');
                                        $session[] = $this->session->userdata('nama_belakang');
                                        $session[] = $this->session->userdata('NRP_MENTOR');
                                        $session[] = $this->session->userdata('NIP_DOSEN');
                                        $session[] = $this->session->userdata('JK_MENTE');
                                        $session[] = $this->session->userdata('TELEPON_MENTE');
                                        $session[] = $this->session->userdata('NILAI_MENTE');
                                        $session[] = $this->session->userdata('STATUS_MENTE');
                                    */
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
                                            <td> <?php echo $row[10];?></td>
                                            <td> <?php echo $row[11];?></td>
                                            <td> <?php echo $row[12];?></td>
                                            <td> <?php echo $row[13];?></td>
                                            <td> <?php echo $row[14];?></td>
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