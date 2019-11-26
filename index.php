<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link 
 *
 * @package mamurjorit
 */

get_header();
?>

<main>
    <?php 
        get_template_part( 'template-parts/content', 'rules' ); 
         get_template_part( 'template-parts/content', 'about' ); 
         get_template_part( 'template-parts/content', 'feedback' ); 
         get_template_part( 'template-parts/content', 'team' ); 
         get_template_part( 'template-parts/content', 'course' ); 
         get_template_part( 'template-parts/content', 'contact' );
     ?>  
</main>


<?php

get_footer();

//@#$Susmi123%/_!?