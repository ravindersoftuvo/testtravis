<?php 

/**
 * CanozVisa enqueue style and script.
 */


function CanozVisa_theme_scripts() { 
	//Load All style
    wp_enqueue_style( 'pagestyle', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array());
    wp_enqueue_style( 'responsive', get_template_directory_uri(). '/css/responsive.css', array());
    wp_enqueue_style( 'slides-css', get_template_directory_uri(). '/css/slides.css', array());
    wp_enqueue_style( 'custom', get_template_directory_uri(). '/css/custom.css', array());
    wp_enqueue_style( 'flexisel',get_template_directory_uri(). '/css/flexisel.css', array());
    wp_enqueue_style( 'bootstrap-select',get_template_directory_uri(). '/css/bootstrap-select.css', array());
    wp_enqueue_style( 'fobtaw',get_template_directory_uri(). '/css/font-awesome.min.css', array());
    wp_enqueue_style( 'live-css',get_template_directory_uri(). '/css/mediaelementplayer.min.css', array());


    //Load All Script
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(),'1.0.0', true );
    wp_enqueue_script( 'live-js', get_template_directory_uri() . '/js/mediaelement-and-player.min.js', array('jquery'),'',true);
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slides', get_template_directory_uri() . '/js/slides.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slimscroll', get_template_directory_uri() . '/js/jquery.slimscroll.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-flexisel', get_template_directory_uri() . '/js/jquery.flexisel.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/js/bootstrap-select.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js', array('jquery'), '1.0.0', true );

    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
     	$url = site_url();
	    $translation_array = array(
		    'site_url' =>  $url,
		);

	wp_localize_script( 'scripts', 'canoz', $translation_array );
   	wp_enqueue_script( 'scripts' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );

	   
    
}
add_action( 'wp_enqueue_scripts', 'CanozVisa_theme_scripts' );


if ( !function_exists( 'yourtheme_setup' ) ) {
        function yourtheme_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'yourtheme_setup' );
}


/* Register Menu call for new theme*/

register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu', 'My_First_WordPress_Theme'),
    'footer' => __('Footer Menu', 'My_First_WordPress_Theme')
));

//wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'my_css_class' ) );


register_sidebar( array(
'name' => 'Footer Left',
'id' => 'footer-left',
'description' => 'Appears in the footer left area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Center',
'id' => 'footer-center',
'description' => 'Appears in the footer center area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Right',
'id' => 'footer-right',
'description' => 'Appears in the footer right bottom area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Bottom',
'id' => 'footer-bottom',
'description' => 'Appears in the footer bottom area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Header Social Icon',
'id' => 'header-social-icon',
'description' => 'Appears in the footer bottom area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );


register_sidebar( array(
'name' => 'Video',
'id' => 'video-player-icon',
'description' => 'Appears in the footer bottom area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

/* 
**
*Create Custom Post Type Name Services
*/


$labels_service = array(
        'name'               => _x( 'Services', 'post type general name', 'service' ),
        'singular_name'      => _x( 'Service', 'post type singular name', 'service' ),
        'menu_name'          => _x( 'Services', 'admin menu', 'service' ),
        'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'service' ),
        'add_new'            => _x( 'Add New', 'Service', 'service' ),
        'add_new_item'       => __( 'Add New Service', 'service' ),
        'new_item'           => __( 'New Service', 'service' ),
        'edit_item'          => __( 'Edit Service', 'service' ),
        'view_item'          => __( 'View Service', 'service' ),
        'all_items'          => __( 'All Services', 'service' ),
        'search_items'       => __( 'Search Services', 'service' ),
        'parent_item_colon'  => __( 'Parent Service:', 'service' ),
        'not_found'          => __( 'No service found.', 'service' ),
        'not_found_in_trash' => __( 'No service found in Trash.', 'service' )
    );

    $service = array(
        'labels'             => $labels_service,
        'description'        => __( 'Description.', 'service' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'service', $service );

$labels_service = array(
        'name'               => _x( 'Testimonial', 'post type general name', 'testimonial' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name', 'testimonial' ),
        'menu_name'          => _x( 'Testimonial', 'admin menu', 'testimonial' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'testimonial' ),
        'add_new'            => _x( 'Add New', 'Testimonial', 'testimonial' ),
        'add_new_item'       => __( 'Add New Testimonial', 'testimonial' ),
        'new_item'           => __( 'New Testimonial', 'testimonial' ),
        'edit_item'          => __( 'Edit Testimonial', 'testimonial' ),
        'view_item'          => __( 'View Testimonial', 'testimonial' ),
        'all_items'          => __( 'All Testimonial', 'testimonial' ),
        'search_items'       => __( 'Search Testimonial', 'testimonial' ),
        'parent_item_colon'  => __( 'Parent Testimonial:', 'testimonial' ),
        'not_found'          => __( 'No Testimonial found.', 'testimonial' ),
        'not_found_in_trash' => __( 'No Testimonial found in Trash.', 'testimonial' )
    );

    $service = array(
        'labels'             => $labels_service,
        'description'        => __( 'Description.', 'testimonial' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'testimonial', $service );

    /* 
**
*Create Custom Post Type Name Team
*/


$labelsteam = array(
        'name'               => _x( 'Team', 'post type general name', 'team' ),
        'singular_name'      => _x( 'Team', 'post type singular name', 'team' ),
        'menu_name'          => _x( 'Team', 'admin menu', 'service' ),
        'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'team' ),
        'add_new'            => _x( 'Add New', 'Team', 'team' ),
        'add_new_item'       => __( 'Add New Team', 'team' ),
        'new_item'           => __( 'New Team', 'team' ),
        'edit_item'          => __( 'Edit Team', 'team' ),
        'view_item'          => __( 'View Team', 'team' ),
        'all_items'          => __( 'All Team', 'team' ),
        'search_items'       => __( 'Search Team', 'team' ),
        'parent_item_colon'  => __( 'Parent Team:', 'team' ),
        'not_found'          => __( 'No team found.', 'team' ),
        'not_found_in_trash' => __( 'No team found in Trash.', 'team' )
    );

    $team = array(
        'labels'             => $labelsteam,
        'description'        => __( 'Description.', 'team' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', )
    );

    register_post_type( 'team', $team );
    
    add_theme_support( 'post-thumbnails' );


    /*
    *
    * Close PLugin update for custom code
    * @PluginName: Testimonial Basics
    */

    add_filter('site_transient_update_plugins', 'remove_update_notification');
    function remove_update_notification($value) {
         unset($value->response["testimonial-basics/testimonial-basics.php"]);
         return $value;
    } 
   

   /* This function help to show recent post in CPT*/

    function recent_post_cat_based( $atts ) {
   
        $args = array(
        'post_type' => 'post',
        'post_status' =>'publish',
        'posts_per_page'=> $atts['postcount'],
        'order'=>'DESC',
        'orderby'=>'ID',
        'tax_query' => array(
            array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $atts['shortcodehelper']
             )
          )
        );
        $the_query = new WP_Query( $args );
        $posts = $the_query->posts;      
        $html = '<div class="shortcode-helper"><div class="post-services">';
        foreach($posts as $postKey => $postVal){
        $url = site_url().'/'.$postVal->post_name;
            $html .= '<div class="post-shortcode"id="post-'.$postKey.'">';
            if(get_post_thumbnail_id($postVal->ID) !== ''){
                $html .= '<img src='.get_the_post_thumbnail_url($postVal->ID).' width="274" height="125" border="0">';
            }
            $html .= '<h3><a href='.$url.'>'.$postVal->post_title.'</a></h3>';
            $html .= '<p>'.wp_trim_words( $postVal->post_content, 50, NULL ).'</p><a href='.$url.' class="common_anchor">Read More</a></div>';
        }
        
        $html .= '</div></div>';
        ob_start();
        echo $html;
        $output = ob_get_clean();
        return $output;

    }
    add_shortcode( 'recent-post-cat', 'recent_post_cat_based' ); 


    /* This function help to show recent post in CPT*/

    function recent_post_cat_based_test( $atts ) {
           
        $args = array(
        'post_type' => 'testimonial',
        'post_status' =>'publish',
        'posts_per_page'=> 3,
        'order'=>'DESC',
        'orderby'=>'ID'
       
        );
        $the_query = new WP_Query( $args );
        $posts = $the_query->posts;     
        $html = '<div class="col-md-12 text-center testimonials_slider_column no_padding animated fadeInUpShort go">
            <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo4" class="nbs-flexisel-ul">';
        foreach($posts as $postKey => $postVal){
            $user_rating = get_post_meta($postVal->ID, 'user_rating', true );
            $class = '';
            switch ($user_rating) {
                case 1:
                    $class = '<span class="star on"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>';
                    break;
                case 1.5:
                    $class = '<span class="star on"></span><span class="star half"></span><span class="star"></span><span class="star"></span><span class="star"></span>';                  
                    break;
                case 2:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star"></span><span class="star"></span><span class="star"></span>';
                    break;
                case 2.5:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star half"></span><span class="star"></span><span class="star"></span>';
                    break;
                case 3:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star"></span><span class="star"></span>';
                    break;
                case 3.5:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star half"></span><span class="star"></span>';
                    break;
                case 4:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star"></span>';
                    break;
                case 4.5:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star half"></span>';
                    break;
                case 4.5:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span>';
                    break;
                default:
                    $class = '<span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span><span class="star on"></span>';
                    break;
                    
            }
            $user_email = get_post_meta($postVal->ID, 'user_email', true );
            $url = site_url().'/'.$postVal->post_name;
            $html .= '<li class="nbs-flexisel-item index" style="width: 1150px;">
            <div class="col-md-12 col-sm-12 col-xs-12 testimonials_slider">
            <img class= "start" src="'.site_url().'/wp-content/themes/immiration/images/quote.png" alt="Icon">'.wpautop($postVal->post_content);
            $html .= '<img class= "end" src="'.site_url().'/wp-content/themes/immiration/images/quote1.png" alt="Icon"><div class="testimonial_rating"><div class="add_rating"> <a class="text-uppercase text-center common_anchor" data-toggle="modal" data-target="#myModal">add your testimonial</a></div><div class="stars">';
            $html .= $class;
            $html .= '</div><span> Rating by '.$postVal->post_title.'</span></div></div></li>';
        }
        
        $html .= '</ul></div></div></div></div>';
        return $html;
    }

    add_shortcode( 'recent-post-test', 'recent_post_cat_based_test' );

    add_shortcode( 'testimonial-add-form', 'testimonial_add_form_callback');
    function testimonial_add_form_callback(){
        wpshout_save_post_if_submitted();
        $html = '<div class="katb_input_style"><form method="POST"><input type="text" required="" maxlength="100" name="tb_author" placeholder="Name"><br><input type="email" required="" maxlength="100" name="tb_email" placeholder="Email "><br><span class="katb_input_rating"><label class="katb_input_label1">Rating</label><fieldset class="rating">
            <input type="radio" id="star5" name="tb_rating" value="5.0"><label class="full" for="star5" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half" name="tb_rating" value="4.5"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4" name="tb_rating" value="4"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star3half" name="tb_rating" value="3.5"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3" name="tb_rating" value="3"><label class="full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half" name="tb_rating" value="2.5"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2" name="tb_rating" value="2"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half" name="tb_rating" value="1.5"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1" name="tb_rating" value="1"><label class="full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="tb_rating" value="0.5"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
        </fieldset></span><textarea required="" class="katb-input-textarea" rows="5" name="tb_testimonial" placeholder="Testimonial *"></textarea><span class="katb_content_html_allowed">HTML Allowed : <code>a p br i em strong q h1-h6</code></span><span class="katb_submit_reset"><input type="hidden" name="katb_form_no" value="1">'.wp_nonce_field( 'testimonial-add-form' ).'<input class="katb_submit" type="submit" name="katb_submitted1" value="Submit"><input class="katb_reset" type="submit" name="katb_reset" value="Reset"></form></div>';
        return $html;
    }


    function wpshout_save_post_if_submitted() {
        // Stop running function if form wasn't submitted
        if ( !isset($_POST['tb_author']) ) {
            return;
        }

        // Check that the nonce was set and valid
        if( !wp_verify_nonce($_POST['_wpnonce'], 'testimonial-add-form') ) {
            echo 'Did not save because your form seemed to be invalid. Sorry';
            return;
        }

        // Do some minor form validation to make sure there is content
        if (strlen($_POST['tb_author']) < 3) {
            echo 'Please enter a title. Titles must be at least three characters long.';
            return;
        }
        if (strlen($_POST['tb_testimonial']) < 100) {
            echo 'Please enter content more than 100 characters in length';
            return;
        }

        // Add the content of the form to $post as an array
        $post = array(
            'post_title'    => $_POST['tb_author'],
            'post_content'  => $_POST['tb_testimonial'],
            
            'post_status'   => 'draft',   // Could be: publish
            'post_type'     => 'testimonial' // Could be: `page` or your CPT
        );
        $postId = wp_insert_post($post);
        update_post_meta($postId, 'user_rating', $_POST['tb_rating']);
        update_post_meta($postId, 'user_email', $_POST['tb_email']);
        echo 'Saved your post successfully! :)';
        return;
}

function global_notice_meta_box() {

    add_meta_box(
        'wpt_events_rating',
        'User Rating',
        'wpt_events_rating_callback',
        'testimonial',
        'side',
        'default'
    );

    add_meta_box(
        'wpt_events_email',
        'User Email',
        'wpt_events_email_callback',
        'testimonial',
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'global_notice_meta_box' );


function wpt_events_rating_callback() {
    global $post;
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    // Get the location data if it's already been entered
    $user_rating = get_post_meta( $post->ID, 'user_rating', true );
    // Output the field
    echo '<input type="number" min="1" max="5" step=".5" name="user_rating" value="' . esc_textarea( $user_rating )  . '" class="widefat">';
}

function wpt_events_email_callback() {
    global $post;
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    // Get the location data if it's already been entered
    $user_email = get_post_meta( $post->ID, 'user_email', true );
    // Output the field
    echo '<input type="text" name="user_email" value="' . esc_textarea( $user_email )  . '" class="widefat">';
}


// Add to admin_init function
add_action('save_post', 'save_custompost_data');
 
function save_custompost_data($post_id) {  
    
    // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want to do anything
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id;
     
    // Check permissions
    if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;
    
    // OK, we're authenticated: we need to find and save the data   
    $post = get_post($post_id);
   

    if ($post->post_type == 'testimonial') { 
        
        update_post_meta($post_id, 'user_rating', $_POST['user_rating'] );
        update_post_meta($post_id, 'user_email', $_POST['user_email'] );
    }
   
    return $post_id;
}

function remove_query_strings() {

   if(!is_admin()) {
       add_filter('script_loader_src', 'remove_query_strings_split', 15);
       add_filter('style_loader_src', 'remove_query_strings_split', 15);
   }
}

function remove_query_strings_split($src){

   $output = preg_split("/(&ver|\?ver)/", $src);
   return $output[0];
}
add_action('init', 'remove_query_strings');


add_action( 'wp_head', '_wp_render_title_tag', 1 );

add_filter( 'document_title_parts', function( $title ){

    if ( is_home() || is_front_page() )
        unset( $title['page'] ); /** Remove title name */

    if ( is_single() )
        unset( $title['site'] ); /** Remove site name */

    return $title;

}, 10, 1 );