<?php

$args = array(
 'post_type'  => 'service',
 'post_atatus' => 'publish',
);
$the_query = new WP_Query( $args ); ?>
<section class="slide fade whiteSlide services_section animatedParent" id="services">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center common_tittle">
          <h2 class="text-uppercase animated fadeInUpShort">SERVICES</h2>
          <span></span> </div>
        <div class="clearfix"></div>
        <div class="col-md-12 text-center services_slider_column no_padding animated fadeInUpShort">
        <ul id="flexiselDemo3">	
<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li>
          <div class="col-md-12 col-sm-12 col-xs-12 services_slider">
             <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="Image"/>
          <div>
              <h3 class="text-uppercase"><?php the_title(); ?></h3>
              <?php //$content = get_the_content();
              //$trimmed_content = wp_trim_words( $content, 80, '' );?>
              <?php the_excerpt();//echo '<p>'.$trimmed_content.'</p>'; ?>          
              <a href="<?php echo get_permalink(); ?>" class="common_anchor">Read More</a> </div>
          </div>
        </li>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

?>
</ul>
</div>
</div>
</div>
</div>
</section>
          