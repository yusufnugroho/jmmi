<?php
$assets_location = base_url()."assets/basica/";
?>

	<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Baca Materi</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- End Product Image & Available Colors -->
	    			<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2><?php
								echo $materi[0]['JUDUL_MATERI'];
								?></h2>
							</div>

							<div class="single-post-image">
								<?php
								if (!empty($materi[0]['THUMBNAIL_MATERI'])){

									?>
									<img src="<?php echo base_url().$materi[0]['THUMBNAIL_MATERI'];?>" style="width: 100%; ">
									<?php
								}
								else {
									?>
									<img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
									<?php
								}
								?>
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-calendar"></i><?php echo $materi[0]['TANGGAL_MATERI']?>
								<i class="glyphicon glyphicon-user"></i><?php echo $materi[0]['PENULIS_MATERI'];?>
								<i class="glyphicon glyphicon-tag"></i><?php echo $materi[0]['TAG_MATERI'];?>
							</div>							
							<div class="single-post-content">
								<?php
								echo htmlspecialchars_decode($materi[0]['ISI_MATERI'])
								?>
							</div>
						</div>
					</div>
					<!-- End Blog Post -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Agenda Terbaru</h4>
						<ul class="recent-posts">
							<?php
							foreach ($agenda_terbaru as $key_agenda_terbaru => $value_agenda_terbaru) {
								?>
									<li><a href="">
										<div class="row">
											<div class="col-md-4">
												
												<?php
												echo $value_agenda_terbaru['TANGGAL_AGENDA'];
												?>
												
											</div>
											<div class="col-md-8">
												<?php
												echo $value_agenda_terbaru['ISI_AGENDA'];
												?>

												di :
												<?php
												echo $value_agenda_terbaru['TEMPAT_AGENDA'];
												?>
											</div>
										</div>
									</a></li>
								<?php
							}
							?>
						</ul>
						<h4>Artikel Terbaru</h4>
						<ul class="blog-categories">
							<?php
							foreach ($artikel_terbaru as $key_artikel_terbaru => $value_artikel_terbaru) {
								?>
									<li><a href="<?php echo base_url()?>pages/artikel/baca/<?php echo $value_artikel_terbaru['ID_ARTIKEL']?>">
										<div class="row">
											<div class="col-md-4">
												<center style="height: 40px; overflow: hidden">
													<img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
												</center>
											</div>
											<div class="col-md-8">
												<?php
												echo $value_artikel_terbaru['JUDUL_ARTIKEL'];
												?>
											</div>
										</div>
									</a></li>
								<?php
							}
							?>
						</ul>
						<h4>Materi Tertulis Terbaru</h4>
						<ul class="blog-categories">
							<?php
							foreach ($materi_tertulis_terbaru as $key_materi_tertulis_terbaru => $value_materi_tertulis_terbaru) {
								?>
									<li><a href="<?php echo base_url()?>pages/materi/baca/<?php echo $value_materi_tertulis_terbaru['ID_MATERI']?>">
										<div class="row">
											<div class="col-md-4">
												<center style="height: 40px; overflow: hidden">
													<?php
													if (!empty($value_materi_tertulis_terbaru['THUMBNAIL_MATERI'])){
														?>
														<img src="<?php echo base_url().$value_materi_tertulis_terbaru['THUMBNAIL_MATERI'];?>" style="width: 100%; ">
														<?php
													}
													else {
														?>
														<img src="<?php echo base_url();?>File/fail.png" style="width: 100%; ">
														<?php
													}
													?>
												</center>
											</div>
											<div class="col-md-8">
												<?php
												echo $value_materi_tertulis_terbaru['JUDUL_MATERI'];
												?>
											</div>
										</div>
									</a></li>
								<?php
							}
							?>
						</ul>
					</div>
	    		</div>
			</div>
		</div>