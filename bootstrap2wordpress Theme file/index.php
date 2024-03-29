<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_2_WordPress
 */

get_header();
?>


<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
<h1 class="page-title">Blog</h1>
</section>
 
 <!--BLOG CONTENT
==============================================-->
<div class="container">
    <div class="row" id="primary">
    
        <main id="content" class="col-sm-8" role="main">
<?php
if ( have_posts() ) : ?>

<?php /* Start the Loop */
while ( have_posts() ) :
the_post(); ?>
<?php 
/*
* Include the Post-Type-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Type name) and that will be used instead.
*/
get_template_part( 'template-parts/content', get_post_type() );
?>
<?php 
endwhile;?>

<?php the_posts_navigation();?>
<?php 
else :?>
<?php
get_template_part( 'template-parts/content', 'none' );?>
<?php
endif;
?>
</main><!--/.content--->

<!-- SIDEBAR
================================================== -->
<aside class="col-sm-4">
<?php get_sidebar();?>
</aside>

</div><!---/.primary--->
</div><!---/.container-->

<?php
get_sidebar();
get_footer();
