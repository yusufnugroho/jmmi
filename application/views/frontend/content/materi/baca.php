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
	    		</div>
			</div>
		</div>