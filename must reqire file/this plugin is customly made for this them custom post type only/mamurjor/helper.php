<?php 
/*
   Plugin Name:Mamurjor Custom Plugin;
   author:Kamal Uddin;
   version:1.0.0
   description: This plugin is used for building the page Custom Post Type.
   slug:helper
*/
   defined('ABSPATH') || exit;

if(file_exists(dirname(__FILE__).'/post-type.php')){
require dirname(__FILE__).'/post-type.php';
}

if(file_exists(dirname(__FILE__).'/post-type-rule.php')){
require dirname(__FILE__).'/post-type-rule.php';
}


if(file_exists(dirname(__FILE__).'/post-type-testimonial.php')){
require dirname(__FILE__).'/post-type-testimonial.php';
}

if(file_exists(dirname(__FILE__).'/post-type-team.php')){
require dirname(__FILE__).'/post-type-team.php';
}

if(file_exists(dirname(__FILE__).'/post-type-course.php')){
require dirname(__FILE__).'/post-type-course.php';
}

if(file_exists(dirname(__FILE__).'/post-type-package.php')){
require dirname(__FILE__).'/post-type-package.php';
}




