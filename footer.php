<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamurjorit
 */

?>
<footer  class="section_padding" id="foot">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 text-center">
                <?php dynamic_sidebar("copyright"); ?>               
           </div>
       </div>

    </div>
</footer>

<?php wp_footer(); ?>
  </body>
</html>