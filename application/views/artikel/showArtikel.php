<!--Header-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ARTIKEL</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar ARTIKEL
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                   
                                    <th class='text-center'> Judul Artikel</th>
                                    <th class='text-center'> Isi Artikel</th>
                                    
                                </tr>   
                            </thead>
                            <tbody>                                
                                <?php
                                //print_r($data);
                                foreach ($data as $row) 
                                    {
                                    ?>
                                    <tr>
                                            <td> <?php echo $row['JUDUL_ARTIKEL'];?></td>
                                            <td>    <?php 
                                                        $isiFile = $row['ISI_ARTIKEL'];
                                                        $isiFile = htmlspecialchars($isiFile);
                                                        echo $isiFile;
                                                    ?>
                                           </td>  
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