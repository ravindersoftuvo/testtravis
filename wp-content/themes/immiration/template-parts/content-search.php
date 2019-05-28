<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage CanozVisa
 * @since CanozVisa 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php has_post_thumbnail(); ?>

	<?php the_excerpt(); ?>

	
</article><!-- #post-## -->

