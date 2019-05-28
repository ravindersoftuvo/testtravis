<?php 
/*Template Name:  Home page*/

?>

<?php get_header(); ?>

<?php
get_template_part( 'template-parts/content', 'home' );

?>
<!-- Slide #Main ENDS--> 

<!-- Slide #why_us_section -->
<?php
get_template_part( 'template-parts/content', 'whyus' );

?>

<!-- Slide #why_us_section ENDS--> 

<!-- Slide #services -->
<?php
get_template_part( 'template-parts/content', 'services' );

?>
<!-- Slide #services ENDS--> 

<!-- Slide #team_section -->
<?php
get_template_part( 'template-parts/content', 'team' );

?>

<!-- Slide #team_section ENDS--> 

<!-- Slide #testimonials -->

<?php
// get_template_part( 'template-parts/content', 'testimonials' );
get_template_part( 'template-parts/content', 'testimonials-new' );

?>

<!-- Slide #testimonials ENDS--> 

<!-- Slide #video_section -->
<?php
get_template_part( 'template-parts/content', 'video' );

?>

<!-- Slide #video_section ENDS--> 

<!-- Slide #blog_section -->

<?php
get_template_part( 'template-parts/content', 'blog' );

?>

<!-- Slide #blog_section ENDS--> 

<!-- Slide #contact_us_section -->

<?php
get_template_part( 'template-parts/content', 'contectus' );

?>
<!-- Slide #contact_us_section ENDS--> 

<!-- Slide #newsletter_section -->

<?php
get_template_part( 'template-parts/content', 'newsletter' );

?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>