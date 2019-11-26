 <section id="course" class="section_padding">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">
					<?php echo esc_html_e("আমাদের কোর্স সমূহ","mamurjorit"); ?>
					</h2>        
                </div>
            </div>
            <div class="row">
                <?php $mjr_cour=new WP_Query(array(
                            'post_type' => 'course',
                        )); 
                        while($mjr_cour->have_posts()){
                        $mjr_cour->the_post();
                        $p_category= get_the_terms(get_the_ID(),'course_category');
                        $port_cat_slug = array();
                        foreach ($p_category as $cat_term) :
                            $port_cat_slug[] = $cat_term->slug;
                        endforeach;
                        $port_cat_class = join(' / ', $port_cat_slug );
                        ?>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box_icon">
                            <?php 
                                $courseno =get_post_meta($post->ID, 'couseno', true);
                                $courseid =get_post_meta($post->ID, 'id', true);
                                $courseName =get_post_meta($post->ID, 'Name', true);
                                $coursehtmlp =get_post_meta($post->ID, 'htmlp', true);
                                $coursehtml =get_post_meta($post->ID, 'html', true);
                                $coursecss =get_post_meta($post->ID, 'css', true);
                                $coursejs =get_post_meta($post->ID, 'js', true);
                                $coursebootstrap =get_post_meta($post->ID, 'bootstrap', true);
                                $coursejQuery =get_post_meta($post->ID, 'jQuery', true);
                                $courseplugin =get_post_meta($post->ID, 'plugin', true);
                                $courseresponsive =get_post_meta($post->ID, 'responsive', true);
                                $courseBootstrap =get_post_meta($post->ID, 'Bootstrap', true);
                                $courseProjects =get_post_meta($post->ID, 'Projects', true);
                                $courseBlog =get_post_meta($post->ID, 'Blog', true);
                                $courseAffiliate =get_post_meta($post->ID, 'Affiliate', true);
                                $courseFee =get_post_meta($post->ID, 'Fee', true);
                                $courslink =get_post_meta($post->ID, 'link', true);
                                $coursepost =get_post_meta($post->ID, 'post', true);
                             ?>
                            <?php echo esc_html($courseno); ?>
                        </div>
                        <div class="box_content">
                            <h3><?php esc_html(the_title()); ?></h3>
                            <p><?php esc_html(the_content()); ?></p>
                             <a id="modal-279823" href="#modal-container-<?php echo esc_html($courseid); ?>" role="button" class="btn" data-toggle="modal"><?php echo esc_html($cat_term->name); ?></a>
							
							<div class="modal fade" id="modal-container-<?php echo esc_html($courseid); ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="myModalLabel">
                                            <?php 
                                            if($courslink ):
                                            ?>
                                                <a href="<?php echo esc_html($courslink); ?>" target="_blank"> <?php echo esc_html($coursepost); ?></a>
                                            <?php 
                                                endif;
                                            ?>

												<?php echo esc_html($courseName); ?>
											</h5> 
											<button type="button" class="close" data-dismiss="modal">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
                                            <?php 
                                            if($coursehtmlp ):
                                            ?>
                                            <p><?php echo esc_html($coursehtmlp); ?></p>
                                            <?php 
                                                endif;
                                            ?>
                                            <ul>
                                            <?php 
                                            if($coursehtml ):
                                            ?>
                                                <li><?php echo esc_html($coursehtml); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($coursecss ):
                                            ?>
                                                <li><?php echo esc_html($coursecss); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($coursejs ):
                                            ?>
                                                <li><?php echo esc_html($coursejs); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($coursebootstrap ):
                                            ?>
                                                <li><?php echo esc_html($coursebootstrap); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($coursejQuery ):
                                            ?>
                                                <li><?php echo esc_html($coursejQuery); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseplugin ):
                                            ?>
                                                <li><?php echo esc_html($courseplugin); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseresponsive):
                                            ?>
                                                <li><?php echo esc_html($courseresponsive); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseBootstrap ):
                                            ?>
                                                <li><?php echo esc_html($courseBootstrap); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseProjects ):
                                            ?>
                                                <li><?php echo esc_html($courseProjects); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseBlog ):
                                            ?>
                                                <li><?php echo esc_html($courseBlog); ?></li>
                                            <?php 
                                                endif;
                                            ?>
                                            <?php 
                                            if($courseAffiliate ):
                                            ?>
                                                <li><?php echo esc_html($courseAffiliate); ?></li>
                                            <?php 
                                                endif;
                                            ?>

                                            </ul>   
                                            <?php echo esc_html(get_post_meta($post->ID, 'Fee', true)); ?>
										</div>
										<div class="modal-footer">
											  
											<button type="button" class="btn btn-secondary" data-dismiss="modal">
												<?php echo esc_html_e("Close","mamurjorit"); ?>
											</button>
										</div>
									</div>
									
								</div>
								
							</div>                            
                        </div>
                    </div>
                </div>
                <?php 
                    }
                   ?>
            </div>
        </div>
    </section>
    
    <section id="services" class="section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center"><?php echo esc_html_e("আমাদের সেবা সমূহ","mamurjorit"); ?></h2>
                </div> 
                <?php $mjr_package=new WP_Query(array(
                    'post_type' => 'package',
                 )); 
                while($mjr_package->have_posts()){
                 $mjr_package->the_post();
                 ?>
                <div class="col-md-3">
                    <div class="single_service">
                                                    <?php 
                                $domain =get_post_meta($post->ID, 'domain', true);
                                $storage =get_post_meta($post->ID, 'storage', true);
                                $bandwidth =get_post_meta($post->ID, 'bandwith', true);
                                $ssl =get_post_meta($post->ID, 'ssl', true);
                                $addon =get_post_meta($post->ID, 'addon', true);
                                $subdomain =get_post_meta($post->ID, 'subdomain', true);
                                $email =get_post_meta($post->ID, 'email', true);
                                $database =get_post_meta($post->ID, 'database', true);
                             ?>
                        <div class="service_title">
                            <h2><?php esc_html(the_title()); ?></h2>
                        </div>
                        <div class="service_content">
                              <?php esc_html(the_content()); ?> 
                           <div class="pro_desc">
                             <ul>
                                <?php 
                                    if($domain ):
                                ?>
                                     <li><?php echo esc_html($domain); ?></li>
                                <?php 
                                     endif;
                                 ?>
                                <?php 
                                     if($storage ):
                                 ?>
                                    <li><?php echo esc_html($storage); ?></li>
                                <?php 
                                     endif;
                                ?>
                                <?php 
                                    if($bandwidth ):
                                ?>
                                    <li><?php echo esc_html($bandwidth); ?></li>
                                <?php 
                                 endif;
                                ?>
                                <?php 
                                  if($ssl ):
                                ?>
                                    <li><?php echo esc_html($ssl); ?></li>
                                <?php 
                                 endif;
                                ?>
                                <?php 
                                     if($addon ):
                                ?>
                                    <li><?php echo esc_html($addon); ?></li>
                                <?php 
                                    endif;
                                 ?> 
                                 <?php 
                                     if($subdomain ):
                                ?>
                                    <li><?php echo esc_html($subdomain); ?></li>
                                <?php 
                                    endif;
                                 ?> 
                                 <?php 
                                     if($email ):
                                ?>
                                    <li><?php echo esc_html($email); ?></li>
                                <?php 
                                    endif;
                                 ?>
                                 <?php 
                                     if($database ):
                                ?>
                                    <li><?php echo esc_html($database); ?></li>
                                <?php 
                                    endif;
                                 ?>
                                  
                             </ul>
                              
                           </div>
                           <div class="btn"><a class="pro_buy" href="https://mamu756807.supersite2.srsportal.com/" target="_blank"><?php echo esc_html_e("Buy Now","mamurjorit"); ?></a></div>
                        </div>
                    </div>
                </div>
               <?php 
                }
                 ?>

            </div>
        </div>
    </section>