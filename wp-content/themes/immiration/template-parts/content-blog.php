<?php 
$args = array(
'post_type' => 'post',
'post_status' =>'publish',
'posts_per_page' => 2,
'tax_query' => array(
    array(
    'taxonomy' => 'category',
    'field' => 'slug',
    'terms' => 'blog-news'
     )
  )
);

// the query
$the_query = new WP_Query( $args ); ?>
<section class="slide blog_section animatedParent" id="blogs">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center common_tittle">
          <h2 class="text-uppercase animated fadeInUpShort">Blog | News</h2>
          <span></span> </div>
        <div class="clearfix"></div>
        <div class="col-md-12 text-left blog_slider_column no_padding animated fadeInUpShort">
          <ul id="flexiselDemo5">
            <li>
              <div class="col-md-12 col-sm-12 col-xs-12 blog_column">
<?php if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
     <div class="blog_column_div">
      <?php
	      // Must be inside a loop.
	       
	      if( has_post_thumbnail() ) { ?>
	          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="Image"/><?php
	      }else {
	          echo '<img src="' . site_url(). '/wp-content/uploads/images/no_image.png" />';
	      }
      ?>
        <div>
          <h3 class=""><?php the_title(); ?></h3>
          <span class="blog_date"><?php echo get_the_date('d M Y'); //the_date(); ?></span>
          <?php the_excerpt(); ?>
          <a href="<?php echo get_permalink(); ?>">Read More<img src="<?php echo get_template_directory_uri()."/images/caret.png";?>" alt="Icon"/></a> </div>
      </div>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
