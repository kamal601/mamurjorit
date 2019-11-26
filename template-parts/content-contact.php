<section id="contact" class="section_padding">
        <div class="container-fluid">
           <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center"><?php echo esc_html_e("যোগাযোগ","mamurjorit"); ?> </h2>
                </div> 
           </div>
            <div class="row">
                <div class="col-md-8">
                    <?php dynamic_sidebar('map-sidebar'); ?>
                </div>
                <div class="col-md-4">
                    <div class="ct ct_info">
                         <?php dynamic_sidebar("contactinfo"); ?>
                         
                         <?php dynamic_sidebar("follow"); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>