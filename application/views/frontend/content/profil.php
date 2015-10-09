<?php
$assets_location = base_url()."assets/basica/";
?>

	<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Profil BPM</h1>
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
	    					<img src="<?php echo base_url().$logo_profil[0]['content_content'];?>" alt="Item Name">
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
	    				foreach ($list_profil as $key_list => $value_value) {
	    					?>
	    					<h2 ><?php echo $value_value['label_content']?></h2>
	    					<p >
	    						<?php echo $value_value['content_content']?>
	    					</p>
	    					<hr>
	    					<?php
	    				}
	    				?>
	    				
	    			</div>
	    			<!-- End Product Summary & Options -->

	    			
	    		</div>
    				<h2 align="center" style="margin-top: 100px">
    					<?php echo $moto_profil[0]['label_content']?>
    				</h3>
    				<blockquote>
    					<?php echo $moto_profil[0]['content_content']?>
    				</blockquote>
			</div>
		</div>