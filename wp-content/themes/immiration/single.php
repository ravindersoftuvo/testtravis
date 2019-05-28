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
				<div class="col-md-12 col-sm-12 col-xs-12 blog_inner_section_text">
					<div class="blog_column_div"> 
						<?php
						if ( has_post_thumbnail() ) { ?>
					        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="" width="279" height="299" class="alignnone size-full wp-image-37" /><?php
				        }
					    else {
					        echo '<img src="' . site_url(). '/wp-content/uploads/images/no_image.png" />';
					    } ?>
				
				<div class="canoz-content">
					<h3 class=""><?php echo get_the_title(); ?></h3>
					<div class="date_format"><?php echo get_the_date('d M Y'); ?></div>
					<div class="content_block">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
	</div></div></div></div></div></section>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
