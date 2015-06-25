<?php
$assets_location = base_url()."assets/basica/";
?>

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Daftar Artikel</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<?php 
    				foreach ($artikel as $key => $value) {
    				?>
						<!-- Blog Post Excerpt -->
						<div class="col-sm-6">
							<div class="blog-post blog-single-post">
								<div class="single-post-title">
									<h2><?php echo $value['JUDUL_ARTIKEL'];?></h2>
								</div>

								<div class="single-post-image" style="height: 200px; overflow: hidden">
									<?php
									if (!empty($value['THUMBNAIL_ARTIKEL'])){

										?>
										<img src="<?php echo base_url().$value['THUMBNAIL_ARTIKEL'];?>" style="width: 100%; ">
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
									<i class="glyphicon glyphicon-calendar"></i><?php echo $value['TANGGAL_ARTIKEL'];?>
									<i class="glyphicon glyphicon-user"></i><?php echo $value['PENULIS_ARTIKEL'];?>
									<i class="glyphicon glyphicon-tag"></i><?php echo $value['TAG_ARTIKEL'];?>
								</div>
								
								<div class="single-post-content">
									<p>
										<?php
										echo substr(htmlspecialchars_decode($value['ISI_ARTIKEL']), 0, 200);
										?>
									</p>
								<?php echo "<a href='".base_url()."pages/ARTIKEL/baca/".$value['ID_ARTIKEL']."' class='btn'>Read more</a>";?>
								</div>
							</div>
						</div>
						<!-- End Blog Post Excerpt -->
					<?php 
					} 
					?>
				</div>
			</div>
		</div>