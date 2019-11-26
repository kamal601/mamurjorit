<section id="about" class="section_padding">
        <div class="container-fluid">
        	
        	<div class="row">
        		<?php 
        		$post=new WP_Query(array(
        			'post_type' =>'post' , 
        	));
        if($post->have_posts()){
        		$post->the_post(); ?>
				<div class="col-md-12">
			        
					<h2 class="text-center"><?php esc_html(the_title()); ?></h2>
				</div>				
                <div class="row">
                    <div class="col-md-6">
                       
			        <div class="about_single">
			            <img alt="Bootstrap Image Preview" src="<?php echo the_post_thumbnail_url(); ?>">
			        </div>
                        
                    </div>
                    <div class="col-md-6">
                       
			        <div class="about_single">
			            <?php the_content(); ?>
			        </div>
                        
                    </div>
                </div>
			<?php } ?>
			</div> 
        </div>
    </section>