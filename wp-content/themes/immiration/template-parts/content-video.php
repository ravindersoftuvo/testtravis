<section class="slide video_section animatedParent" id="video">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
<div class="carousel-inner" role="listbox">

<?php
 
$args = array(
    'post_type' => 'video',
    'post_status' => 'publish',
    'post_per_page'  => -1,

);

// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ($query->have_posts() ) {
 	$i=0;
    // Start looping over the query results.
    while ( $query->have_posts() ) { $query->the_post(); ?>

		<div class="item <?php if($i==0) { ?> active<?php } ?>">
			<video poster="<?php echo get_field( "video_thumbnail_image"); ?>">
				<source src="<?php echo get_field( "video_url"); ?>" type="video/youtube" />
				Your browser does not support the video tag.
			</video>
			<!-- <div class="full_screen_btn"> <img src="/wp-content/themes/immiration/images/full_view.png" alt="Icon" id="fullscreen"/> </div> -->
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center common_tittle">
						<h2 class="text-uppercase">Videos</h2>
						<span></span>
					</div>
					<div class="clearfix"></div>
					<!-- <div class="play_icon"> <img src="/wp-content/themes/immiration/images/play_icon.png" alt="Icon" id="myBtn" onclick="myFunction()" class="video1"/> <img src="/wp-content/themes/immiration/images/pause_icon.png" alt="Icon" id="myBtn" onclick="myFunction()" class="video2" style="display:none;"/> </div> -->
					<div class="col-md-12 text-left video_slider_column ">
		              	<div class="col-md-12 col-sm-12 col-xs-12 video_column">
		                	<div class="video_column_div">
		                  		<h3 class="text-uppercase"><?php the_title(); ?></h3>
		                  		<p><?php echo get_field('video_description'); ?></p>
		                	</div>
		              	</div>
		            </div>
				</div>
			</div>
		</div>
 
 <?php $i++; }
 
}
 
// Restore original post data.
wp_reset_postdata();
 
?>	

</div>
<div class="crousel_control">
  	<div class="container"> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <img src="/wp-content/themes/immiration/images/arw_right.png" alt="Icon"/> </a> <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <img src="/wp-content/themes/immiration/images/arw_left.png" alt="Icon"/> </a> </div>
</div>

</div></section>