<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_2_WordPress
 */

?>


<?php wp_footer(); ?>

<!--SIGN UP SECTION
==============================================-->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <h2>Are you ready to take he course to <strong>Next level</strong></h2>
            <p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign up!</a></p>
        </div> <!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/.signup-->

<!--FOOTER
==============================================-->
<footer>
<div class="container">
    <div class="col-sm-3">
        <p><a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="logo"></a></p>
    </div>
    <div class="col-sm-6">

    <?php 
        
        wp_nav_menu( array(
        
        'theme_location'  => 'footer',
        'container'  => 'nav',
        'menu_class'  => 'list-unstyled list-inline',
       
    ));
        
        ?>
    
    </div>
    <div class="col-sm-3">
        <p class="pull-right">
            <?php bloginfo(name);?>&copy; <?php echo date('Y');?>  <?php the_author_link();?> 
        </p>
    </div>
</div>
</footer>


<!-- MODAL
================================================== -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
            </div><!-- modal-header -->
            
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>
                
                <hr>
                
                <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
            </div><!-- modal-body -->
            
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->



<!--BOOTSTRAP CORE JAVASCRIPT
==============================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/assets/js//jquery-2.1.1.min.js "></script>

<script>
$(function() {
	
	// Cache the Window object
	var $window = $(window);
	
	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		
		$(window).scroll(function() {
		
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
			
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
	});
	
});


</script>


</body>
</html>
