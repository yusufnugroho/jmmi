<?php
$assets_location = base_url()."assets/basica/";
?>

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Frequently Asked Question</h1>
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
	    				foreach ($res_faq as $key => $value) {
	    					?>
		    				<div>
			    				<h2>
		    						<?php echo $value['label_content']?>
			    				</h2>
			    				<blockquote>
			    					<?php echo $value['content_content']?>
			    				</blockquote>
		    				</div>
		    				<hr>
	    					<?php
	    				}
	    				?>
	
	    			</div>
	    			<!-- End Product Summary & Options -->	    			
	    		</div>
			</div>
		</div>