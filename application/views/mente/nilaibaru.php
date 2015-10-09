<!--Header-->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menilai Mente</h1>
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menilai Mente
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <?php
                                foreach ($res_mente[0] as $key => $value) {
                                    if ($key != 'PASS_MENTE'){
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <b>
                                            <?php
                                            echo ucwords(str_replace('_', ' ', strtolower($key)));
                                            ?>
                                            </b>
                                        </div>
                                        <div class="col-lg-6">
                                            : <?php
                                            echo $value;
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="panel-group col-lg-8" id="accordion" >
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Screening Mente</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form role="form" action='<?php echo base_url()."mente/upnilai_score";?>' method='post'>
                                                <input type='hidden' name='id_nilai' class="form-control" value="<?php echo $existed_nilai[0]['id_nilai']?>">
                                                <input type='hidden' name='return_link' class="form-control" value="<?php echo base_url().'mente/nilaibaru/'.$res_mente[0]['NRP_MENTE']?>">
                                                <div class="form-group">
                                                    <label>Tes Tulis</label>
                                                    <input type='number' name='form_tes_tulis' class="form-control" value="<?php echo $existed_nilai[0]['TES_TULIS']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Quisioner</label>
                                                    <input type='number' name='form_quisioner' class="form-control" value="<?php echo $existed_nilai[0]['QUISIONER']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tilawah</label>
                                                    <input type='number' name='form_tilawah' class="form-control" value="<?php echo $existed_nilai[0]['TILAWAH']?>">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-default">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Kehadiran Event BPM</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form role="form" action='<?php echo base_url()."mente/upnilai_score";?>' method='post'>
                                                <input type='hidden' name='id_nilai' class="form-control" value="<?php echo $existed_nilai[0]['id_nilai']?>">
                                                <input type='hidden' name='return_link' class="form-control" value="<?php echo base_url().'mente/nilaibaru/'.$res_mente[0]['NRP_MENTE']?>">
                                                <?php
                                                $iter = 1;
                                                foreach ($existed_nilai[0] as $key_existed => $value_existed) {
                                                    if (substr($key_existed, 0, 2) == "E_"){
                                                        ?>
                                                        <div class="form-group">
                                                            <label>
                                                                TM <?php echo $iter;?>
                                                            </label>
                                                            <select class="form-control" name="form_<?php echo $key_existed?>">
                                                                <option value="0" <?php if ($value_existed == '0') echo "selected"?>>Tidak Hadir</option>
                                                                <option value="1" <?php if ($value_existed == '1') echo "selected"?>>Hadir</option>
                                                            </select>
                                                        </div>
                                                        <?php
                                                        $iter++;
                                                    }
                                                }
                                                ?>
                                                <div>
                                                    <button type="submit" class="btn btn-default">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Kehadiran Mentoring</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form role="form" action='<?php echo base_url()."mente/upnilai_score";?>' method='post'>
                                                <input type='hidden' name='id_nilai' class="form-control" value="<?php echo $existed_nilai[0]['id_nilai']?>">
                                                <input type='hidden' name='return_link' class="form-control" value="<?php echo base_url().'mente/nilaibaru/'.$res_mente[0]['NRP_MENTE']?>">
                                                <?php
                                                $iter = 1;
                                                foreach ($existed_nilai[0] as $key_existed => $value_existed) {
                                                    if (substr($key_existed, 0, 9) == "KEHADIRAN"){
                                                        ?>
                                                        <div class="form-group">
                                                            <label>
                                                                TM <?php echo $iter;?>
                                                            </label>
                                                            <select class="form-control" name="form_kehadiran_<?php echo $iter?>">
                                                                <option value="0" <?php if ($value_existed == '0') echo "selected"?>>Tidak Hadir</option>
                                                                <option value="1" <?php if ($value_existed == '1') echo "selected"?>>Hadir</option>
                                                            </select>
                                                        </div>
                                                        <?php
                                                        $iter++;
                                                    }
                                                }
                                                ?>
                                                <div>
                                                    <button type="submit" class="btn btn-default">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">UAS Mentoring</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form role="form" action='<?php echo base_url()."mente/upnilai_score";?>' method='post'>
                                                <input type='hidden' name='id_nilai' class="form-control" value="<?php echo $existed_nilai[0]['id_nilai']?>">
                                                <input type='hidden' name='return_link' class="form-control" value="<?php echo base_url().'mente/nilaibaru/'.$res_mente[0]['NRP_MENTE']?>">
                                                <div class="form-group">
                                                    <label>Tes Tulis</label>
                                                    <input type='number' name='form_uas_tulis' class="form-control" value="<?php echo $existed_nilai[0]['UAS_TULIS']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Quisioner</label>
                                                    <input type='number' name='form_uas_kuis' class="form-control" value="<?php echo $existed_nilai[0]['UAS_KUIS']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tilawah</label>
                                                    <input type='number' name='form_uas_tilawah' class="form-control" value="<?php echo $existed_nilai[0]['UAS_TILAWAH']?>">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-default">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!--Footer-->