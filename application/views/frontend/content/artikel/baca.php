<?php
$assets_location = base_url()."assets/basica/";
?>

	<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Baca Artikel</h1>
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
								echo $artikel[0]['JUDUL_ARTIKEL'];
								?></h2>
							</div>

							<div class="single-post-image">
								<?php
								if (!empty($artikel[0]['THUMBNAIL_ARTIKEL'])){

									?>
									<img src="<?php echo base_url().$artikel[0]['THUMBNAIL_ARTIKEL'];?>" style="width: 100%; ">
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
								<i class="glyphicon glyphicon-calendar"></i><?php echo $artikel[0]['TANGGAL_ARTIKEL']?>
								<i class="glyphicon glyphicon-user"></i><?php echo $artikel[0]['PENULIS_ARTIKEL'];?>
								<i class="glyphicon glyphicon-tag"></i><?php echo $artikel[0]['TAG_ARTIKEL'];?>
							</div>							
							<div class="single-post-content">
								<?php
								echo htmlspecialchars_decode($artikel[0]['ISI_ARTIKEL'])
								?>
							</div>
						</div>
					</div>
					<!-- End Blog Post --> 			
	    		</div>
			</div>
		</div>