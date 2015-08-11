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
                        <?php
                            $test = $file[0];
                            echo $test['JUDUL'];
                        ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <embed src="<?php echo base_url();?><?php echo $test['PATH'];?>" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">

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