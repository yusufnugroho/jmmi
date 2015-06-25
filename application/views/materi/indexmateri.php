<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Materi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Materi
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> No</th>
                                    <th class='text-center'> Judul</th>
                                    <th class='text-center'> Tanggal</th>
                                    <th class='text-center'> Penulis</th>
                                    <th class='text-center'> Kategori</th>
                                    <th class='text-center' width='14%'>Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                $no = 1;
                                foreach ($materi as $row) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $no;?>
                                            <td> <?php echo $row['JUDUL_MATERI'];?></td>
                                            <td> <?php echo $row['TANGGAL_MATERI'];?></td>
                                            <td> <?php echo $row['PENULIS_MATERI'];?></td>
                                            <td> <?php echo $row['TAG_MATERI'];?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>index.php/materi/hapustulisan/<?php echo $row['ID_MATERI'];?>" class="btn btn-danger" value="Hapus">Hapus</a>
                                            </td>   
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                    <?php
                                    foreach ($file as $row) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $no;?>
                                                <td> <a href="<?php echo base_url();?><?php echo $row['PATH'];?>" download> <?php echo $row['JUDUL'];?></a></td>
                                                <td> <?php echo $row['TANGGAL_MATERI'];?></td>
                                                <td> <?php echo $row['PENULIS_MATERI'];?></td>
                                                <td> <?php echo $row['TAG'];?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>index.php/materi/showFile/<?php echo $row['ID'];?>" class="btn btn-info" value="Lihat">Lihat</a>
                                                    <a href="<?php echo base_url();?>index.php/materi/hapusfile/<?php echo $row['ID'];?>" class="btn btn-danger" value="Hapus">Hapus</a>
                                                </td>   
                                            </tr>
                                            <?php
                                            $no++;}
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