<section id="testimonial" class="section_padding">
       <div class="testimonial_area">
        <div class="container">
            <div class="row">
 				<div class="col-md-12">
					<h2 class="text-center"><?php echo esc_html_e("মন্তব্য","mamurjorit"); ?></h2>
				</div>              
                <div class="col-md-12">
                    <div class="owl-carousel test-slides" id="testimonial-carousel">
					<?php $mjr_testimonial=new WP_Query(array(
                        	'post_type' => 'testimonial',
                        )); 
                        while($mjr_testimonial->have_posts()){
                        $mjr_testimonial->the_post();
                       
                       ?>

                        <div class="item">
                            <div class="single-testimonial">
                                <div class="image-area">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Testimonial">
                                </div>
                                <div class="text-area">
                                    <h3><?php esc_html(the_title()); ?><span><?php echo get_post_meta($post->ID, 'Designation', true); ?></span></h3>
                                    <p><?php esc_html(the_content()); ?></p>
                                </div>
                            </div>
                        </div>
					<?php 
                    }
                   ?>

                    </div>
                </div>
            </div>        
        </div>
        </div>
    </section>