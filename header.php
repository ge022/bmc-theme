<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

<?php if ( header_enabled() ) : ?>

  <header id="top">

    <div class="container-fluid">

      <div class="row">
        
        <div class="col header-top">
          
          <?php if ( has_custom_logo() && get_theme_mod('optional_header_logo') ) : ?>
          
            <div class="d-flex text-center justify-content-center site-logo">
              <?php if ( get_theme_mod( 'optional_custom_header_logo' ) && get_theme_mod( 'custom_header_logo' ) ) : ?>
                <?php
                  // Replace custom_logo's src with the overriding image's
                  add_filter( 'get_custom_logo', 'custom_logo_src' );
                  // Disable responsive image (srcset)
                  add_filter( 'wp_calculate_image_srcset', '__return_false' );
                  the_custom_logo();
                ?>
              <?php else : ?>
                <?php
                  the_custom_logo();
                ?>
              <?php endif; ?>
            </div>
            
          <?php endif; ?>
          
          
          <h1 class="d-flex flex-column align-items-center mb-0 site-branding">
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

              <span class="d-block text-center site-title">
                <?php
                  if ( get_theme_mod( 'optional_custom_header_site_title', false ) ) :
                    echo get_theme_mod( 'custom_header_site_title' );
                  else :
                    bloginfo( 'name' );
                  endif;
                ?>
              </span>
              
              <small class="d-block text-center site-description">
                <span class="description-wrapper">
                  <?php
                    if ( get_theme_mod( 'optional_custom_header_site_description', false ) ) :
                      echo get_theme_mod( 'custom_header_site_description' );
                    else :
                      $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) : ?>
                        <?php echo $description; ?>
                      <?php endif;
                    endif;
                  ?>
                </span>
              </small>
              
            </a>
            
          </h1>
          
        </div>


      </div>
      
      <div class="row">

        <nav class="col navbar navbar-expand-lg navbar-dark w-100">
          
          <div class="container">
            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse w-100" id="navbarNav">

              <?php
                wp_nav_menu( array(
                  'menu' => 'main-menu',
                  'theme_location' => 'main-menu',
                  'depth' => 2,
                    'container' => false,
                    'menu_class' => 'navbar-nav mx-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
              ?>
              
            </div>

          </div>

        </nav>
        
      </div>


      
    </div>
  
  </header>

<?php endif; ?>