
<div class="container" id="main_notification">
<?php
if ($notification == "duplicate"){
	?>
	<div class="alert alert-danger">
        <b><i>NRP Mentor </i> sudah terdaftar</b>. Lihat <b>Daftar Mentor</b> untuk Melihat Daftar Mentor
    </div>
	<?php
}
else if ($notification == "password_nomatch"){
	?>
	<div class="alert alert-warning">
        <b>Password</b> yang Digunakan tidak cocok. Coba <b></i>isi lagi</b></i>.
    </div>
	<?php
}
else if ($notification == "nrp_exist"){
	?>
	<div class="alert alert-danger">
        <b>NRP</b> yang digunakan untuk mendaftar <b><i>sudah ada</i></b>. Anda tidak diizinkan melakukan pendaftaran lagi. Hubungi <b>Administrator</b> atau <b>Contact Person</b> untuk mengklarifikasikannya.
    </div>
	<?php
}

?>
</div>
</script>