<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage CanozVisa
 * @since CanozVisa 1.0
 */
?>
<section class="footer_section animatedParent">
  <div class="footer_section_upper animated fadeInUpShort">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12 text-left footer_column">
          <h3 class="text-uppercase">REGISTRATION <br/>
            <span></span></h3>
          <div class="clearfix"></div><?php
			if(is_active_sidebar('footer-left')){
			dynamic_sidebar('footer-left');
			}
			?>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 text-left footer_column">
          <h3 class="text-uppercase">QUICK NAVIGATIONS <br/>
            <span></span></h3>
          <div class="clearfix"></div>
           <?php
			if(is_active_sidebar('footer-center')){
			dynamic_sidebar('footer-center');
			}
			?>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-left footer_column">
          <h3 class="text-uppercase">GET IN TOUCH <br/>
            <span></span></h3>

          <div class="clearfix"></div>
          <p>CANOZ VISA SERVICES INC.</p>
          <p>Email : <a href="mailto:info@canosvisa.com">info@canosvisa.com</a></p>
          <h3 class="text-uppercase follow_subscribe hidden-xs">FOLLOW & SUBSCRIBE <br/>
            <span></span></h3>
		          <?php
			if(is_active_sidebar('footer-right')){
			dynamic_sidebar('footer-right');
			}
			?>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="footer_section_bottom">
    <div class="container">
          <?php
      if(is_active_sidebar('footer-bottom')){
      dynamic_sidebar('footer-bottom');
      }
      ?>
     
    </div>
  </div>
</section>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-uppercase" id="myModalLabel">add your testimonIAL</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[testimonial-add-form]'); ?>
      </div>      
    </div>
  </div>
</div>
<!-- <a class="schedule_anchor">Schedule a meeting</a> </div> -->
<!-- schedule a meeting --> 

<a href="#" class="scrollup"><img src="<?php echo get_template_directory_uri()."/images/top.png"?>" alt="Icon"/></a> 
<?php wp_footer(); ?>


</body>
</html>
