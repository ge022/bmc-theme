<?php
  
  
  if ( !function_exists( 'bmc_setup' ) ) :
    /*
     *	Sets up theme defaults and registers support for various WordPress features.
     */
    function bmc_setup()
    {
      
      // Add theme support for Automatic Feed Links
      add_theme_support( 'automatic-feed-links' );
      
      // Add theme support for Post Formats
      add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );
      
      // Add theme support for Featured Images
      add_theme_support( 'post-thumbnails' );
      
      
      // Add theme support for HTML5 Semantic Markup
      add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
      
      // Add theme support for document Title tag
      add_theme_support( 'title-tag' );
      
      // Add theme support for selective refresh for widgets.
      add_theme_support( 'customize-selective-refresh-widgets' );
      
      // Add support for core custom logo.
      add_theme_support( 'custom-logo', array(
          'flex-width' => true,
          'flex-height' => true,
          'header-text' => array( 'site-title', 'site-description' ),
      ) );
      
      // TODO: Add support for custom headers
      
    }
  endif;
  add_action( 'after_setup_theme', 'bmc_setup' );
  
  
  /*
   *	Set the content width in pixels, based on the theme's design and stylesheet.
   *
   *	Priority 0 to make it available to lower priority callbacks.
   *
   *	@global int $content_width
   */
  function bmc_content_width()
  {
    $GLOBALS[ 'content_width' ] = apply_filters( 'bmc_content_width', 1140 );
  }
  
  add_action( 'after_setup_theme', 'bmc_content_width', 0 );
  
  /*
   *	Enqueue scripts and styles.
   */
  function bmc_enqueue_scripts()
  {
    
    // Compiled custom css + bootstrap
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    
    // CDN scripts with local fallback
    
    // JQuery
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', false, '3.2.1', true );
    wp_add_inline_script( 'jquery', 'window.jQuery || document.write(\'<script src="' . esc_url( get_theme_file_uri( '/assets/js/jquery.min.js' ) ) . '"><\/script>\')' );
    wp_enqueue_script( 'jquery' );
    
    // JQuery Easing
    //wp_enqueue_script( 'jquery-easing', get_theme_file_uri( '/assets/js/jquery.easing.js' ), array( 'jquery' ), '1.3', true );
    
    // Popper.js
    wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', false, '1.12.3', true );
    wp_add_inline_script( 'popper-js', '(typeof(Popper) === \'function\') || document.write(\'<script src="' . esc_url( get_theme_file_uri( '/assets/js/popper.min.js' ) ) . '"><\/script>\')' );
    wp_enqueue_script( 'popper-js' );
    
    // Bootstrap
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array( 'jquery', 'popper-js' ), '4.0.0-beta.2', true );
    wp_add_inline_script( 'bootstrap', '(typeof($.fn.modal) === \'function\') || document.write(\'<script src="' . esc_url( get_theme_file_uri( '/assets/js/bootstrap.min.js' ) ) . '"><\/script>\')' );
    wp_register_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery', 'popper-js' ), null, true );
    wp_enqueue_script( 'bootstrap' );
    
    // Custom JS
    wp_enqueue_script( 'custom-js', get_theme_file_uri( '/assets/js/index.min.js' ), array( 'jquery', 'popper-js' ), null, true );
    
  }
  
  add_action( 'wp_enqueue_scripts', 'bmc_enqueue_scripts' );
  
  
  /*
   *	Check if the calling template requires a header or footer.
   */
  function header_enabled()
  {
    $header_enabled = apply_filters( 'header_enabled', true );
    return $header_enabled;
  }
  
  function footer_enabled()
  {
    $footer_enabled = apply_filters( 'footer_enabled', true );
    return $footer_enabled;
  }
  
  
  if ( !function_exists( 'bmc_edit_link' ) ) :
    /*
     *	Returns an accessibility-friendly link to edit a post or page.
     */
    function bmc_edit_link()
    {
      edit_post_link(
          sprintf(
          /*	translators: %s: Name of current post */
              __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'bmc-theme' ),
              get_the_title()
          ),
          '<span class="edit-link">',
          '</span>'
      );
    }
  endif;
  
  
  /*
   *	Register menus
   */

// Register Custom Navigation Walker
  require_once( 'class-wp-bootstrap-navwalker.php' );
  
  function register_my_menus()
  {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'social-menu-bottombar' => __( 'Footer Social Menu' )
        )
    );
  }
  
  add_action( 'init', 'register_my_menus' );
  
  
  /*
   *	Use latest font-awesome icons
   */
  add_filter( 'storm_social_icons_use_latest', '__return_true' );
  add_filter( 'storm_social_icons_size', create_function( '', 'return "normal";' ) );
  add_filter( 'storm_social_icons_networks', 'storm_social_icons_networks' );
  
  function storm_social_icons_networks( $networks )
  {
    $extra_icons = array(
        'www.google.com' => array(
            'name' => 'Google',
            'icon' => 'fa fa-google'
        ),
    );
    $extra_icons = array_merge( $networks, $extra_icons );
    return $extra_icons;
  }
  
  
  /*
   *	Recommend the Kirki plugin
   */
  
  include_once get_theme_file_path( 'inc/class-kirki-installer-section.php' );
  
  
  // Kirki fallback
  require_once get_template_directory() . '/inc/class-bmc-theme-kirki.php';
  
  /*
   *	Customizer additions
   */
  require get_template_directory() . '/inc/customizer.php';
  
  /*
   *	Load Jetpack compatibility file
   */
  //require get_template_directory() . '/inc/jetpack.php';
  
  
  /*
   *	Override custom_logo's url to the one set in the Theme Customizer
   */
  function custom_logo_src( $html )
  {
    $html = preg_replace( '/src="(.*?)"/', 'src="' . get_theme_mod( 'custom_header_logo' ) . '"', $html );
    return $html;
  }
  
  /*
   *  Add custom logo to login form
   */
  function my_login_logo()
  {
    
    if ( has_custom_logo() ) :
      
      $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
      ?>
      <style type="text/css">
        .login h1 a {
          background-image: url(<?php echo esc_url( $image[0] ); ?>);
          -webkit-background-size: <?php echo absint( $image[1] )?>px;
          background-size: contain;
          height: 200px;
          width: auto;
        }
      </style>
      <?php
    endif;
  }
  
  add_action( 'login_head', 'my_login_logo' );
  
  /*
   *  Change login form's logo link
   */
  function my_login_logo_url()
  {
    return home_url();
  }
  
  add_filter( 'login_headerurl', 'my_login_logo_url' );
  
  function my_login_logo_url_title()
  {
    return get_bloginfo( 'name' );
  }
  
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );
  
  
  /*
   * The Events Calendar
   */
  
  // Prevent calendar and events being indexed by search engines
  function tribe_noindex()
  {
    if ( get_post_type() == 'tribe_events' || is_singular( 'tribe_events' ) || tribe_is_event() || tribe_is_event_organizer() || tribe_is_event_venue() || tribe_is_in_main_loop() || tribe_is_view() ) {
      echo ' <meta name="robots" content="noindex, nofollow" />' . "\n";
    }
  }
  
  add_action( 'wp_head', 'tribe_noindex' );
  
  // Previous month's links
  function tribe_prev_pagination( $html )
  {
    return str_replace( '&laquo;', '<', $html );
  }
  
  add_filter( 'tribe_events_the_previous_month_link', 'tribe_prev_pagination' );
  
  // Previous month's links
  function tribe_next_pagination( $html )
  {
    return str_replace( '&raquo;', '>', $html );
  }
  
  add_filter( 'tribe_events_the_next_month_link', 'tribe_next_pagination' );
  
  // Remove export button from The Events Calendar
  require get_template_directory() . '/inc/tribe-events/prevent_export.php';
  
  // Hide that an event reoccurs
  add_filter( 'tribe_events_recurrence_tooltip', function () {
    return '';
  } );
  
  // Shortcode plugin filters
  add_filter( 'ecs_event_title_tag_start', function () {
    return '<h5 class="entry-title summary">';
  }, $atts, $post );
  
  add_filter( 'ecs_event_date_tag_start', function () {
    return '<div class="duration time">';
  }, $atts, $post );