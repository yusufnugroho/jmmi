<!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Unggah File
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>index.php/materi/doUpload' method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type='text' name='judul'class="form-control" required>
                                        </div>      

                                        <input name="userFile" type="file" tabindex="1" value="NULL" /> 
                                        <br>
                                        <label>Tag</label>
                                        <select name='tag'>
                                            <?php
                                            foreach($tag as $row)
                                            {
                                            ?>
                                                <option value="<?php echo $row['TAG'];?>">
                                                    <?php echo $row['TAG'];?>
                                                </option>
                                            <?php
                                            }       
                                            ?>
                                        </select>
                                        <input type="submit" class="btn btn-info" style="float:right" value="Kirim">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!--FOOTER-->