<?php 
/* Template Name: Home 
 * The template for displaying home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nusinov_Smith_LLP
 */

get_header();
?>

	<!-- SLIDER SECTION  1st										
         ====================================-->
      <section id="slider">
         <div class="container clearfix">
            <div class="row">
			 <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/s1.jpg" class="round-icon" alt="Pad and pencil">
               <div class="slider-details">
                  <div class="slidertitle">
                    <?php the_field('slider_title'); ?>
                  </div>
                  <div class="listing-title"><?php the_field('slider_slogan'); ?></div>
                  <a href="<?php the_field('slider_button_link_'); ?>"><button class="btn btn-larg Rectangle-19"> Contact the firm <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
               </div>
            </div> <!-- row -->
         </div><!-- container -->
      </section>
	  
	  

      <!-- END slidersection-->
      <!--  Service Over view 2nd
         ======================================================================================-->
      <section id="overview">
         <div class="container clearfix">
            <div class="row">
               <div class="bothspading">
                  <div class="container-title">
                     <h1><?php the_field('service_title'); ?></h1>
                  </div>
                  <div class="infotext col-sm-9 col-sm-offset-3">
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					  <?php the_content(); ?>
					  <?php endwhile; else : ?>
 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
                  </div><!-- end col -->
               </div>
            </div> <!-- row -->
         </div><!-- container -->
      </section>
      <!-- End Over view-->
      <!--ABOUT ATTORNEYS
         ==============================================================================================-->
      <section id="attorney">
         <div class="container">
            <div class="row">
               <div class="bothspading">
                  <div class="custonBorder">
                     <div class="col-sm-6">
                        <div class="att-title">
                           <h1><?php the_field('the_attorneys_titlte'); ?></h1>
                        </div>
                        <div class="att-description"><?php the_field('detailes'); ?>
                        </div>
                     </div><!-- end col -->
                     <div class="col-sm-6 over-img">
                        <figure>
                           <img src="<?php the_field('image'); ?>" alt="Bootstrap to Wordpress">
                        </figure>
                        <a href="<?php the_field('button_link'); ?>"><button class="btn btn-larg Rectangle-25">SEE profile <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                     </div><!-- end col -->
                     <br style="clear: both;">
                  </div>
               </div>
            </div>  <!-- row -->
         </div><!-- container -->
         </div>
      </section>
      <section id="optin">
         <div class="container">
            <div class="row">
               <div class="col-sm-9">
                  <p class="lead"><?php the_field('title_for_call_to_action_'); ?></p>
               </div>
               <!-- end col -->
               <div class="col-sm-3 cntr">
			       <a href="<?php the_field('call_button_link_'); ?>"><button class="btn btn-lg btn btn-larg button">
                  contact the firm <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </button></a>
               </div>
               <!-- end col -->
            </div>
            <!-- row -->
         </div>
         <!-- container -->
      </section>
      <!-- A Track Record of Success
         ==============================================================================================-->
<section id="trecord">
         <div class="container clearfix">
            <div class="row">
               <div class="bothspading">
                  <div class="col-sm-6">
                     <div class="container-title">
                        <h1><?php the_field('track__title'); ?></h1>
                     </div>
                  </div><!-- end col -->
                  <div class="col-sm-6">
				  <?php the_field('track_sort_details_'); ?>
				  </div><!-- end col -->
               </div>
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 gbag">
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arr-top.png" class="arr-top" alt="Pad and pencil">
                     <div class="gbag2">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/quit.png" class="round-icon" alt="Pad and pencil">
						<?php the_field('track__detailes'); ?>
                        
                     </div>
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-bottom.png" class="icon-bottom" alt="Pad and pencil">
                  </div><!-- end col -->
               </div> <!-- row -->
            </div> <!-- row -->
         </div><!-- container -->
      </section>
      <!-- Blog Section 
         ==============================================================================================-->
      <section id="blogs">
         <div class="container clearfix">
            <div class="row">
               <div class="bothspading">
<?php 
    query_posts(array( 
        'post_type' => 'service',
        'showposts' => 4 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-sm-3">
                     <div class="post-info">
                        <h4> <?php the_title(); ?></h4>
                        <div class="post-deatail">
                           <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                     </div>
                  </div>
<?php endwhile;?>
               </div>
            </div>
         </div><!-- container -->
         </div>
      </section>
      <div class="container clearfix bagroung">
         <div class="col-sm-2 col-sm-offset-5">
            <div class="row">
			<button class="btn btn-larg Rectangle-19 center">MORE SUCCESSES <i class="fa fa-caret-right" aria-hidden="true"></i></button>
			</div> <!-- row -->
         </div><!-- end col -->
      </div><!-- container -->
<?php
get_footer();
