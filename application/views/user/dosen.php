    <!--Header-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php
                    echo $session[2];
                    ?>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profil Dosen
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo $foto?>">
                            </div>
                            <div class="col-lg-8">
                                <?php
                                for ($i=0; $i < count($field); $i++) { 
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>
                                            <?php
                                            echo $field[$i];
                                            ?>
                                            </h4>
                                        </div>
                                        <div class="col-md-8">
                                            <h4> :
                                            <?php
                                            echo $session[$i+1];
                                            ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>       
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