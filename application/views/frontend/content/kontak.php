<?php
$assets_location = base_url()."assets/basica/";
?>

	<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Kontak BPM</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<iframe src="<?php echo $location_kontak[0]['content_content']?>" style="width: 100%; min-widt" width="540" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<?php
	    				foreach ($list_kontak as $key_list => $value_value) {
	    					?>
	    					<h3><?php echo $value_value['label_content']?></h3>
		    				<?php echo $value_value['content_content']?>
		    				<hr>
	    					<?php
	    				}
	    				?>
	    				
	    			</div>
	    			<!-- End Product Summary & Options -->

	    			
	    		</div>
			</div>
		</div>