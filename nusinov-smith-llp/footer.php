<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Nusinov_Smith_LLP
    */
   
   ?>
<!-- FOOTER
   ================================================== -->
<footer>
<div class="row">
		<div class="col-sm-12">
                  <?php dynamic_sidebar( 'footer-0' ); ?>
            </div>
         <div class="col-sm-6">            
            <div class="col-sm-6">
				<div class="row">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			</div>
            <div class="col-sm-6">
				<div class="row">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
            </div>
         </div>
         <div class="col-sm-6">
            <?php dynamic_sidebar( 'footer-3' ); ?>
         </div>
      </div>

<div class="copyright">
			<div class=" clearfix">
               <div class="col-sm-9">
                  <div class="footerinfo">© 2018 Nusinov Smith LLP | Attorneys At Law. All rights reserved. Attorney Disclaimer | Privacy Policy</div>
               </div>
               <div class="col-sm-3">
                  <p class="pull-r">Site by ONE400</p>
               </div>
			  </div>
</div>
</footer>
<?php wp_footer(); ?>
<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script>
jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});
</script>

</body>
</html>
