<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage CanozVisa
 * @since CanozVisa 1.0
 */

get_header(); ?>
<?php $img = site_url().'/wp-content/uploads/2018/08/banner2.jpg'; ?>
<section class="slide consultant_section visa_section work_permit" style="background-attachment: fixed;background-repeat:no-repeat;
background-image: url(<?php echo $img;?>);}">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center common_tittle">
          <h2 class="text-uppercase">Search</h2>
          <span></span> </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<section class="visa_section_desc">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left visit_country_section no_padding">
				<!-- Tab panes -->
				<div class="col-md-12 col-sm-12 col-xs-12 visit_tab_right search_content">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="overview">
							<div class="tab_desc">
								<?php if ( have_posts() ) : ?>

								<header class="page-header">
									<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'CanozVisa' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
								</header><!-- .page-header -->

								<?php
								// Start the loop.
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								// End the loop.
								endwhile;

							// If no content, include the "No posts found" template.
								else :
									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>
							</div>

						<div class="clearfix"></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	

<?php get_footer(); ?>
