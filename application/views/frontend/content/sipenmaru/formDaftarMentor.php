

    <div id="wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <form role="form" action='<?php echo base_url();?>pages/sipenmaru/doapply' method='post' id="sipenmaruMentor">
                                <blockquote>
                                    <p>Siapakah yang lebih baik perkataannya daripada orang yang menyeru kepada Allah, mengerjakan amal yang saleh dan berkata: "Sesungguhnya aku termasuk orang-orang yang berserah diri?" - (QS 41 : 33)</p>
                                </blockquote>
                                <hr>
                                <center>
                                    <h3> <strong> Data Diri </strong> </h3>
                                </center>

                                <div class="form-group">
                                    <label>NRP</label>
                                    <input type='text' name='nrp'class="form-control" value="<?php if (isset($data['nrp'])) echo $data['nrp']?>" required >
                                </div>       
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type='password' name='password' id='password' class="form-control" required>
                                </div>       
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type='password' name='confirmPassword' id='confirmPassword' class="form-control" required>
                                </div>       
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input type='text' name='nama_depan'class="form-control" value="<?php if (isset($data['nama_depan']))  echo $data['nama_depan']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input type='text' name='nama_belakang'class="form-control" value="<?php if (isset($data['nama_belakang']))  echo $data['nama_belakang']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" id="L" value="L" <?php if(isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == "L") echo "checked"?>>Ikhwan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" id="P" value="P" <?php if(isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == "P") echo "checked"?>>Akhwat
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type='email' name='email'class="form-control" value="<?php if (isset($data['email'])) echo $data['email']?>" required>
                                </div> 
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type='text' name='hp'class="form-control" value="<?php if (isset($data['hp'])) echo $data['hp']?>" required>
                                </div> 
                                <div class="form-group">
                                    <label>IPK</label>&nbsp &nbsp<snall>(dipisahkan dengan tanda titik)</snall>
                                    <input type='number'step="any" name='ipk'class="form-control" value="<?php if (isset($data['ipk'])) echo $data['ipk']?>" required>
                                </div> 
                                
                                <hr>
                                <center>
                                    <h3> <strong> Data Mentoring </strong> </h3>
                                </center>
                                
                                <div class="form-group">
                                    <label>Mentor Saat Ini</label>
                                    <input type='text' name='mentor_sekarang'class="form-control" value="<?php if (isset($data['mentor_sekarang'])) echo $data['mentor_sekarang']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Mentoring</label>
                                    <select name='kondisi' class="form-control"required>
                                        <option value="Rutin"> Rutin</option>
                                        <option value="Berhenti"> Berhenti</option>
                                    </select>
                                </div>   
                                <hr>
                                <center>
                                    <h3> <strong> Amal Yaumi </strong><br><small> Dihitung dalam satu pekan </small> </h3> 
                                </center>
                                <div class="form-group">
                                    <label>Shalat Wajib Berjamaah di Awal Waktu</label>
                                    <input type='number' name='wajib'class="form-control col-md-1" value="<?php if (isset($data['wajib'])) echo $data['wajib']?>" required>
                                </div> 
                                <div class="form-group">
                                    <label>Tilawatil Quran</label>
                                    <input type='number' name='tilawatil'class="form-control col-md-1" value="<?php if (isset($data['tilawatil'])) echo $data['tilawatil']?>" required>
                                </div> 
                                <div class="form-group">
                                    <label>Wirid Alma'tsurat</label>
                                    <input type='number' name='wirid'class="form-control col-md-1" value="<?php if (isset($data['wirid'])) echo $data['wirid']?>" required>
                                </div> 
                                <div class="form-group">
                                    <label>Shalat Dhuha</label>
                                    <input type='number' name='dhuha'class="form-control col-md-1" value="<?php if (isset($data['dhuha'])) echo $data['dhuha']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Shalat Malam</label>
                                    <input type='number' name='malam'class="form-control col-md-1" value="<?php if (isset($data['malam'])) echo $data['malam']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Bacaan Favorit</label>
                                    <textarea style="height:90px"class="form-control col-lg-12" name='bacaan' required><?php if (isset($data['bacaan'])) echo $data['bacaan']?></textarea>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <center>
                                    <h3> <strong> Motivasi dan Saran </strong></h3>
                                </center>
                                <div class="form-group">
                                    <label>Motivasi Menjadi Mentor</label>
                                    <textarea style="height:90px"class="form-control col-lg-12"name='motivasi'  required><?php if (isset($data['motivasi'])) echo $data['motivasi']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Saran Untuk Pelaksanaan Mentoring Wajib atau Badan Pelaksana Mentoring</label>
                                    <textarea style="height:90px"class="form-control col-lg-12"name='saran' required><?php if (isset($data['saran'])) echo $data['saran']?> </textarea>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <center>    
                                    <h3><strong> Pernyataan Komitmen</strong></h3>
                                </center>
                                <div class="form-group">
                                    <label>
                                    Komitmen Saya (ditulis ulang) *</label>
                                    <label>
“Saya menyatakan bahwa data yang telah saya isi di atas adalah benar dan dapat dipertanggung jawabkan, dan saya berkomitmen akan mengikuti segala bentuk pembinaan dari BPM JMMI ITS jika diterima menjadi mentor, serta siap menerima sangsi jika melanggar aturan yang telah dibuat.”</label>
                                    <textarea style="height:90px"class="col-lg-12"name='komitmen' required><?php if (isset($data['komitmen'])) echo $data['komitmen']?></textarea>
                                    
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <div>
                                    <button type="submit" class="btn btn-default">Kirim </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 
    
<!--Password Validation Check-->
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#sipenmaruMentor" ).validate({
  rules: {
    password: "required",
    confirmPassword: {
      equalTo: "#password"
    }
  }
});
</script>