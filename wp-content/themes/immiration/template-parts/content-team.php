<?php

$args = array(
 'post_type'  => 'team',
 'post_atatus' => 'publish',
);
$the_query = new WP_Query( $args ); ?>
<section class="slide fade team_section animatedParent" id="team">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center common_tittle">
          <h2 class="text-uppercase animated fadeInUpShort"><?php echo get_field('our_team_title'); ?></h2>
          <span></span> </div>
        <div class="clearfix"></div>
        <div class="col-md-12 text-center team_desc animated fadeInUpShort">
          <?php echo get_field('our_team_description'); ?>
        </div>
        <div class="clearfix"></div>

<?php if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-6 col-sm-6 col-xs-12 text-center team_column animated fadeInUpShort">
          <div class="team_member_image"> <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Image"/> </div>
          <div class="member_desc">
            <h3 class="text-uppercase"><?php the_title(); ?></h3>
            <h4><?php echo get_field('team_uni_id_number'); ?></h4>
          </div>
          <div class="text-content short-text">
            <?php the_content(); ?>
            <?php if (get_field( "team_linkdin_url" ) !== ''){ ?>
              <p>View <?php the_title(); ?> profile on Linkedin: <a target="_blank" href="<?php echo get_field( "team_linkdin_url");?>"><?php echo get_field( "team_linkdin_url");?></a> </p>
              <div class="clearfix"></div>
            <?php } ?>
          </div>
          <div class="show-more"> <a href="#">Show more</a> </div>
        </div>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      </div>
    </div>
  </div>
</section>