<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CanozVisa
 * @since CanozVisa 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); $img = !empty(get_field('header_image_url')) ? get_field('header_image_url') : site_url().'/wp-content/uploads/2018/08/banner2.jpg'?>
		<section class="slide consultant_section visa_section skilled_worker" style="background-attachment: fixed;background-repeat:no-repeat;
		background-image: url(<?php echo $img;?>);}">
		  <div class="content" >
		    <div class="container">
		      <div class="row">
		        <div class="col-md-12 text-center common_tittle">
		          <h2 class="text-uppercase"><?php echo get_the_title();?></h2>
		          <span></span> </div>
		        <div class="clearfix"></div>
		        
		      </div>
		    </div>
		  </div>
		</section>
		<section class="visa_section_desc blog_inner_section">
			<div class="container">
			<div class="row">
			<div class="col-md-12 text-left services_content_section no_padding">
				<div class="col-md-12 col-sm-12 col-xs-12 visit_tab_right">
		      <div class="tab-content">
		        <div class="tab-pane active">
		           <div class="tab_desc">
		           
		            <div class="services_text">
		<?php
			// Include the single post content template.
			the_content();
			
		endwhile;
		?>
	</div> 
             
             
           </div>
           
           <div class="clearfix"></div>
           
        </div>
        
      </div>
  </div>
</div></div></div></div></section>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
