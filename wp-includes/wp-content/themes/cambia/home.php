<?php 
/**
 Template Name: Home
*/
get_header();?>
			

<!--Video Section-->

<div class="container">
		<div class="row">
			<div class="col-lg-12">
               <div class="cover">
                   <?php the_field('banner_text'); ?>
               </div>
</div>
</div>
</div>


<div class="home_top_video">
<video autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/img/video-poster.png">
<source src="<?php the_field('top_video');?>" type="video/mp4">
<source src="<?php the_field('top_video_ogv');?>" type="video/ogv">
<source src="<?php the_field('top_video_webm');?>" type="video/webm">
</video> 
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
    document.getElementById('vid').play();
});
</script>



<!--Video Section Ends Here-->	


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="about-us-text">
                  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>		
				
				
			</div><!-- About Us Text -->
			</div>
	</div><!-- row -->
	</div><!-- container -->




<section id="service-section">
	<div class="container">
		<div class="row centered">
			<div class="col-md-12">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box_content') ) ?>	
			</div>
		</div><!-- row -->
		
<div class="row centered">
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box') ) ?>	
</div>		<!-- row -->

	</div><!-- container -->
	</section>
	
	
	<!-- Parallax-Banner -->
	<section class="module parallax_1 founder-rose-section" id="parallax-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
						 <?php the_field('business_consulting_content'); ?>
						</div>
					</div>
			</div>
	</section><!-- Parallax-Banner -->
	
	
			<!-- Proud Partners -->
		<div id="proud-partners-section">
		<div class="container">
			<div class="row centered">
			<div class="col-lg-12">
			<div class="proud-partner-heading">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_content') ) ?>	
			</div>
			</div>	
			
<?php /*?>			<div class="col-lg-9">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_logos') ) ?>	
				</div><?php */?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Proud Partners -->
	
	
	
	<!-- Case Study Section-->
		<div id="case-study-section">
		<div class="container">
			<div class="row">
			<div class="col-lg-6">
			<div class="case-study-text">
			
			<h3>Case Studies</h3>
			
	<?php echo do_shortcode('[testimonials_cycle theme="default_style" count="-1" order_by="date" order="ASC" show_title="0" use_excerpt="0" show_thumbs="0" show_date="0" show_other="0" hide_view_more="1" output_schema_markup="0" testimonials_per_slide="1" transition="fade" timer="5000" pause_on_hover="true" auto_height="container" show_pager_icons="1" prev_next="0" display_pagers_above="0" paused="0"]');?>

<div class="caption"><a href="<?php echo home_url();?>/pivotal-briefs/"class="green-btn">Read More</a></div>

</div>
</div>	
			
			<div class="col-lg-6">
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- Case Study Section-->

	
	
	
	
	
	
	
	
	

	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h2 class="heading-text">Gain from Our Worldwide Prospective</h2>
	</div>
	</div>
	</div><!-- container -->
	
	<!-- Worldwide-Map -->
	<section id="worldwide-map">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
			
			<div class="world-map-image">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/worldwide-map.png" alt="worldwide-map">
			</div>
			</div>
			</div><!-- row -->
			
			<div class="row">
			<div class="col-md-4 col-sm-4">
			<div class="social-media">
			<a href="#" target="_blank"><i class="fa fa-facebook-square"></i>@CambiaInformationGroup</a>
			</div>
			</div>
			
			<div class="col-md-4 col-sm-4">
			<div class="social-media">
			<a href="#" target="_blank"><i class="fa fa-twitter"></i>@CambiaInformationGroup</a>
			</div>
			</div>
			
			<div class="col-md-4 col-sm-4">
			<div class="social-media">
			<a href="#" target="_blank"><i class="fa fa-linkedin-square"></i>@CambiaInformationGroup</a>
			</div>
			</div>
			
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- Worldwide-Map -->

				
<?php get_footer();?>