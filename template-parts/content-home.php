        <div class="row slider_area p-0">
           
            <div class="col-md-12 p-0">

                <div class="carousel slide" id="carousel-937395">
                <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-937395">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-937395">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-937395" class="active">
                        </li> 
                    </ol>
                     <div class="carousel-inner">

                        <?php $mjr_slider=new WP_Query(array(
                        	'post_type' => 'mamurjorit_slider',
                        )); 
                        while($mjr_slider->have_posts()){
                        $mjr_slider->the_post();
                        $p_category= get_the_terms(get_the_ID(),'slider_category');
                        $port_cat_slug = array();
                        foreach ($p_category as $cat_term) :
                            $port_cat_slug[] = $cat_term->slug;
                        endforeach;
                        $port_cat_class = join(' / ', $port_cat_slug );
                        ?>
                         <div class="carousel-item <?php echo esc_html($port_cat_class); ?>">
                            <img class="d-block w-100" alt="Carousel Bootstrap " src="<?php  the_post_thumbnail_url(); ?>">
                            <div class="carousel-caption">
                                <h2>
                                    <?php esc_html(the_title()); ?>
                                </h2>
                                <p>
                                    <?php esc_html(the_content()); ?>
                                </p>
                            </div>
                        </div>	
                       <?php 
                        }
                        ?>

                    </div> <a class="carousel-control-prev" href="#carousel-937395" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-937395" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div> 