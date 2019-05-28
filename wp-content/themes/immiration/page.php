<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
		while ( have_posts() ) : the_post();
			$post = get_post(get_the_ID());
			
			// if this post has a parent, retrieve it
			$parent = $post->post_parent;
			if ($parent == '86') {
				get_template_part( 'template-parts/child-parts/content', 'australian' );
			
			}elseif($parent == '84'){
				get_template_part( 'template-parts/child-parts/content', 'canadian' );

			}else{
				get_template_part( 'template-parts/child-parts/content', 'default' );


			}
			

			// Include the page content template.

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
