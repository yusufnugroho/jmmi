<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Artikel</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Artikel
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> No</th>
                                    <th class='text-center'> Judul Artikel</th>
                                    <th class='text-center'> Isi Artikel</th>
                                    <th class='text-center'> Tanggal Artikel</th>
                                    <th class='text-center'> Penulis Artikel</th>
                                    <th class='text-center'> Tag Artikel</th>
                                    <th class='text-center' width='14%'>Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                $no = 1;
                                foreach ($data as $row) 
                                    {
                                    ?>
                                    <tr>
                                            <td> <?php echo $no;?>
                                            <td> <?php echo $row['JUDUL_ARTIKEL'];?></td>
                                            <td>    <?php 
                                                        $isiFile = $row['ISI_ARTIKEL'];
                                                        $isiFile = htmlspecialchars($isiFile);
                                                        echo $isiFile;
                                                    ?></td>
                                            <td> <?php echo $row['TANGGAL_ARTIKEL'];?></td>
                                            <td> <?php echo $row['PENULIS_ARTIKEL'];?></td>
                                            <td> <?php echo $row['TAG_ARTIKEL'];?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>artikel/showArtikel/<?php echo $row['ID_ARTIKEL'];?>" class="btn btn-info" value="Lihat">Lihat</a>   
                                                <?php if($session == 'mentor') {?>
                                                <a href="<?php echo base_url();?>artikel/deleteArtikel/<?php echo $row['ID_ARTIKEL'];?>"    onClick="return confirm('Delete This Artikel?')" class="btn btn-danger" value="Hapus">Hapus</a>
                                                <?php ;} ?>
                                            </td>   
                                        </tr>
                                        <?php
                                        $no++;
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