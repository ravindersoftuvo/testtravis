


<?php $img = !empty(get_field('header_image_url')) ? get_field('header_image_url') :  site_url().'/wp-content/uploads/2018/08/banner2.jpg'; ?>
<section class="slide consultant_section visa_section work_permit" style="background-attachment: fixed;background-repeat:no-repeat;
background-image: url(<?php echo $img;?>);}">
  <div class="content" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center common_tittle">
          <h2 class="text-uppercase"><?php echo get_the_title(); ?></h2>
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
        <div class="col-md-12 col-sm-12 col-xs-12 visit_tab_right">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="overview">
              <div class="tab_desc">
                <?php the_content(); ?>
              </div>

            <div class="clearfix"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>