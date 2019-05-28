<?php 
// The Query
$args = array(
'post_type' => array('post','service'),
'post_status' =>'publish',
'posts_per_page'   => -1,

);
$the_query = new WP_Query( $args );

?>

<section class="slide whiteSlide main_section animatedParent" id="home">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center logo"> <a href="<?php echo site_url(); ?> "><img src="<?php echo get_template_directory_uri()."/images/logo.png"?>" alt="Image"/></a></div>
        <div class="col-md-12 text-center common_tittle"> <span></span>
          <div class="clearfix"></div>
          <p>Get Advise from our Expert's who are Regulated Immigration Professionals</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-sm-6 col-xs-12 country_section text-right">
          <div class="text-center country_section_div">
            <h2 class="text-uppercase">canada</h2>
            <a href="" class="text-uppercase text-center livesite-engage ls-engage-button ls-action-T ls-desktop ls-theme-label" id="stylesheet1">consult now</a>
            <div class="clearfix"></div>
            <a href="tel:<?php echo get_field( "canda" )?>" class="tel-number"><p><img src="<?php echo get_template_directory_uri()."/images/phone.png"?>" alt="Image"/></p></a>
            <p><?php echo get_field( "canda" )?></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 country_section country_section_right text-left">
          <div class="text-center country_section_div">
            <h2 class="text-uppercase">australia</h2>
            <a href="" class="text-uppercase text-center livesite-engage ls-engage-button ls-action-T ls-desktop ls-theme-label" id="stylesheet2">consult now</a>
            <div class="clearfix"></div>
            <a href="tel:<?php echo get_field( "aust_phone_number" )?>"  class="tel-number"><p><img src="<?php echo get_template_directory_uri()."/images/phone.png"?>" alt="Image"/></p></a>
            <p><?php echo get_field( "aust_phone_number" )?></p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 help_form">
          <form class=" go-help-form animated fadeInUpShort">
            <h1 class="text-uppercase">How can we help ?</h1>
            <select class="selectpicker">
              <?php
              // The Loop
                $posts = $the_query->posts;
               
                foreach($posts as $postKey => $postVal){
                  $url = site_url().'/'.$postVal->post_name;
                  echo '<option value='.$postVal->ID.' data-href='.$url.'>' . $postVal->post_title . '</option>';
                }
              ?>
              
            </select>
            <a class="go-post" href="" target="_blank">GO</a>
          </form>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 slide_arrow text-center"> <span class="nextSlide"><img src="<?php echo get_template_directory_uri()."/images/icon5.png"?>" alt="Icon"/></span> </div>
      </div>
    </div>
  </div>
</section>