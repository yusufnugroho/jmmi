            <!-- 

            AFTER LOADING THE ==NAVIGATION PANE==, CONTROLLER WILL LOAD THE NAVIGATION PANE OF ADMIN

            -->

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Buat Materi
                    
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="well well-lg">
                        <form role="form" action="create" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="title" placeholder="Judul materi">    
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input name="userFile" type="file" tabindex="1" value="NULL" /> 
                            </div>
                            </div>
                                <label></label>
                                <textarea name="articlebody" style="height: 200px" class="form-control wysiwyg">
                                     
                                </textarea>

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
                            <button type="submit" class="btn btn-default">Kirim</button>
                        </form>
                        <script>
                            CKEDITOR.replace('articlebody');
                        </script>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

        <!-- 

        START FROM HERE, CONTROLLER WILL LOAD ==FOOTER== FROM OTHER VIEWS

        -->