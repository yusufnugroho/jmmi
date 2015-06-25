<?php
$assets_location = base_url()."assets/basica/";
?>

	<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Download Materi</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-2">
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-8" >
	    				<?php 
	    				foreach ($file as $key => $value) {
	    				?>
	    					<div class="col-lg-12">
			    				<h2>
		    						<?php echo $value['JUDUL']?>
			    				</h2>
			    				<div class="col-lg-12">
				    				<blockquote>
				    						<br>
				    						<a href='<?php echo base_url().$value['PATH'];?>'>download file(.pdf)</a>
				    						<br>
				    						creted on : <?php echo $value['TANGGAL_MATERI'];?> by : <?php echo $value['PENULIS_MATERI'];?>
				    						<br>
				    						Tag : <?php echo $value['TAG']?>
				    					
				    				</blockquote>
				    				<hr>
			    				</div>
	    					</div>
	    				<?php
	    				}
	    				?>
	    				
	    			</div>
	    			<!-- End Product Summary & Options -->	    			
	    		</div>
			</div>
		</div>