<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamurjorit
 */
the_post();
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="home" class="section_padding">
    <div class="container-fluid p-0">
       <div class="row" id="sticker">
           <div class="col-md-3">
            <div class="logo">
                <?php if(current_theme_supports('custom-logo')){
                            
                    the_custom_logo();
                }
                 ?>
            </div>
            </div>
           <div class="col-md-9 p-0">
                <div class="main_menu">
                  <nav class="menu-navigation-dark">
                    <?php 
                        
                        echo wp_nav_menu_no_ul();
                      ?>

                   </nav>               
                </div>
                          
           </div>
       </div>
    <?php get_template_part( 'template-parts/content', 'home' );   ?>  
    </div>
</header>
