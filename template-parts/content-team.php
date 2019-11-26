    <section id="team" class="section_padding">
        <div class="container">
            <div class="row bug">
 				<div class="col-md-12">
					<h2 class="text-center"><?php echo esc_html_e("আমাদের টিম","mamurjorit"); ?></h2>
				</div>  
               <div class="row">
				<?php $mjr_team=new WP_Query(array(
                        	'post_type' => 'team',
                        )); 
                        while($mjr_team->have_posts()){
                        $mjr_team->the_post();
                       ?>

                    <div class="col-md-4">
                        <div class="team_member">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Team">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <p>
                            	<?php 
                            		$mamjor_fb = get_post_meta($post->ID, 'Facebook', true);
                            		$mamjor_tw = get_post_meta($post->ID, 'Linkedin', true);
                            		$mamjor_lin = get_post_meta($post->ID, 'Twitter', true);
                            	 ?>
                           <?php 
                                if($mamjor_fb ):
                            ?>
                                <a href="<?php echo esc_url($mamjor_fb );?>"  target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if($mamjor_tw ):
                            ?>
                                <a href="<?php echo esc_url($mamjor_tw );?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if($mamjor_lin ):
                            ?>
                                <a href="<?php echo esc_url($mamjor_lin );?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <?php 
                                endif;
                            ?>
                             
                            </p>
                        </div>
                    </div>  
				<?php 
                    }
                   ?>

                </div>  
            </div>
        </div>
    </section>