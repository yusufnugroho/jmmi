<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>FORM PENDAFTARAN MENTOR 2015/2016</h1>
			</div>
		</div>
	</div>
</div>
<div class="container" id="main_notification">
<?php
if ($notification == "success"){
	?>
	<div class="alert alert-success">
        Pendaftaran Sipenmaru <b><i>Berhasil</i></b>. Terimakasih telah melakukan Pendaftaran Mentor Baru. Untuk dapat masuk ke dalam <b>Anda</b> membutuhkan <b><i>persetujuan</i></b> dari <b>Administrator</b> terlebih dahulu.
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