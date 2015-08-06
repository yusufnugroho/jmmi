<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Agenda</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Agenda
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-center'> No</th>
                                    <th class='text-center'> ISI AGENDA</th>
                                    <th class='text-center'> TANGGAL AGENDA</th>
                                    <th class='text-center'> TEMPAT AGENDA</th>
                                    <th class='text-center' width='14%'>Action</th>
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                $no = 1;
                                foreach ($agenda as $row) 
                                    {
                                    ?>
                                    <tr>
                                            <td> <?php echo $no;?>
                                            <td> <?php echo $row['ISI_AGENDA'];?></td>
                                            <td> <?php echo $row['TANGGAL_AGENDA'];?></td>
                                            <td> <?php echo $row['TEMPAT_AGENDA'];?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>agenda/deleteAgenda/<?php echo $row['ID_AGENDA'];?>"    onClick="return confirm('Delete This Artikel?')" class="btn btn-danger" value="Hapus">Hapus</a>
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