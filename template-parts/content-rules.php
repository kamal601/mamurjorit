    <section id="rules" class="section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center"><?php echo esc_html("শিখতে হলে মানতে হবে","mamurjorit"); ?></h2> 
                </div>

				<?php $mjr_rules=new WP_Query(array(
                        	'post_type' => 'mamurjorit_rules',
                        )); 
                        while($mjr_rules->have_posts()){
                        $mjr_rules->the_post();
                        $p_category= get_the_terms(get_the_ID(),'rules_category');
                        $port_cat_slug = array();
                        foreach ($p_category as $cat_term) :
                            $port_cat_slug[] = $cat_term->slug;
                        endforeach;
                        $port_cat_class = join(' / ', $port_cat_slug );
                        ?>
				<div class="col-md-4">
					<div class="single_rules text-center">
					    <div class="rules_icon">
					        <i class="<?php echo esc_attr($cat_term->name); ?>"></i>
					    </div>
					    <div class="rules_text">
					        <h3><?php esc_html(the_title()); ?></h3>
					        <p><?php esc_html(the_content()); ?></p>
					    </div>
					</div>
				</div>
				 <?php 
                    }
                   ?>
			</div>        
        </div>
    </section>