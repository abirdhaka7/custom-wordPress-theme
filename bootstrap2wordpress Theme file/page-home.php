<?php
/*
  Template Name: Home Page  
*/

//Advance Custom Fields



get_header();?>

<?php get_template_part('template-parts/content', 'hero');?>

<?php get_template_part('template-parts/content', 'optin');?>

<?php get_template_part('template-parts/content', 'boost');?>

<?php get_template_part('template-parts/content', 'benefits');?>

<?php get_template_part('template-parts/content', 'coursefeatures');?>

<?php get_template_part('template-parts/content', 'projectfeatures');?>

<?php get_template_part('template-parts/content', 'videofeatures');?>

<?php get_template_part('template-parts/content', 'instructor');?>

<?php get_template_part('template-parts/content', 'testimonial');?>






<?php get_footer(); ?>
