<?php

/*
 *  Add the Header Menu section
 */
// Header menu section
bmc_theme_Kirki::add_section( 'header_navbar', array(
  'title'          => __( 'Header Menu' ),
  'description'    => __( 'Customize the header menu here' ),
  'panel'          => 'nav_menus',
  'priority'       => 1000,
  'capability'     => 'edit_theme_options'
) );

// Optional custom spacing
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_navbar_spacing',
  'label'       => __( 'Enable Custom Spacing', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => false,
  'priority'    => 10,
) );

// Navbar padding-y
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_navbar_padding_y',
  'label'       => __( 'Menu Bar Top and Bottom Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header_navbar',
  'default'     => '0.5rem',
  'priority'    => 15,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-top',
    ),
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Navbar padding-x
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_navbar_padding_x',
  'label'       => __( 'Menu Bar Right and Left Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header_navbar',
  'default'     => '1rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-right',
    ),
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-left',
    ),
  ),
) );

// Nav dropdown padding-y
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_nav_dropdown_padding_y',
  'label'       => __( 'Menu Dropdown Top and Bottom Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header_navbar',
  'default'     => '0.5rem',
  'priority'    => 25,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .dropdown-menu',
      'property' => 'padding-top',
    ),
    array(
      'element'  => 'header .dropdown-menu',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Nav dropdown items padding-x
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_nav_dropdown_item_padding_y',
  'label'       => __( 'Menu Dropdown Item Left and Right Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header_navbar',
  'default'     => '1.5rem',
  'priority'    => 30,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .dropdown-menu .dropdown-item',
      'property' => 'padding-right',
    ),
    array(
      'element'  => 'header .dropdown-menu .dropdown-item',
      'property' => 'padding-left',
    ),
  ),
) );


// Optional custom typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_navbar_typography',
  'label'       => __( 'Enable Custom Typography', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => false,
  'priority'    => 40,
) );

// Custom typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'header_navbar_typography',
  'label'       => __( 'Menu Bar Typography', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
  ),
  'priority'    => 45,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_typography',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .navbar',
      '.navbar-dark .navbar-nav .nav-link',
      '.navbar-dark .navbar-nav .show > .nav-link',
      '.navbar-dark .navbar-nav .active > .nav-link',
      '.navbar-dark .navbar-nav .nav-link.show',
      '.navbar-dark .navbar-nav .nav-link.active',
      '.dropdown-item'
    ),
  ),
) );


// Optional custom colors
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_navbar_colors',
  'label'       => __( 'Enable Custom Colors', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => false,
  'priority'    => 60,
) );

// Custom navbar background color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_background_color',
  'label'       => __( 'Navigation Bar Background Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#343a40',
  'priority'    => 65,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .navbar',
    ),
    'property' => 'background-color',
    'suffix'   => ' !important',
  ),
) );

// Custom nav link color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_link_color',
  'label'       => __( 'Link Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#fff',
  'priority'    => 75,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .navbar',
      '.navbar-dark .navbar-nav .nav-link',
      '.navbar-dark .navbar-nav .show > .nav-link',
      '.navbar-dark .navbar-nav .nav-link.show',
      '.navbar-dark .navbar-nav .nav-link.active',
    ),
    'property' => 'color',
  ),
) );

// Custom nav link active/hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_link_hover_color',
  'label'       => __( 'Link Hover Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#d9d9d9',
  'priority'    => 80,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.navbar-dark .navbar-nav .nav-link:focus',
      '.navbar-dark .navbar-nav .nav-link:hover',
      '.navbar-dark .navbar-nav .show > .nav-link:focus',
      '.navbar-dark .navbar-nav .show > .nav-link:hover',
      '.navbar-dark .navbar-nav .nav-link.show:focus',
      '.navbar-dark .navbar-nav .nav-link.show:hover',
    ),
    'property' => 'color',
  ),
) );

// Custom color transition duration
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'number',
  'settings'    => 'header_navbar_color_transition',
  'label'       => __( 'Link Color Transition Duration', 'bmc-theme' ),
  'description' => __('Transition duration is set in seconds.'),
  'section'     => 'header_navbar',
  'default'     => 0.25,
  'choices'     => array(
    'min'  => 0,
    'max'  => 5,
    'step' => 0.01,
  ),
  'priority'    => 85,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => array(
        '.navbar-dark .navbar-nav .nav-link',
        '.navbar-dark .navbar-nav .show > .nav-link',
        '.navbar-dark .navbar-nav .nav-link.show',
        '.dropdown-item'
      ),
      'property' => 'transition',
      'units'    => 's',
    ),
  ),
) );


// Custom active nav link color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_active_link_color',
  'label'       => __( 'Active Link Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#d9d9d9',
  'priority'    => 90,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.navbar-dark .navbar-nav .active > .nav-link',
      '.navbar-dark .navbar-nav .nav-link.active',
    ),
    'property' => 'color',
  ),
) );

// Custom active nav link active/hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_active_link_hover_color',
  'label'       => __( 'Active Link Hover Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#d9d9d9',
  'priority'    => 95,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.navbar-dark .navbar-nav .active > .nav-link:focus',
      '.navbar-dark .navbar-nav .active > .nav-link:hover',
      '.navbar-dark .navbar-nav .nav-link.active:focus',
      '.navbar-dark .navbar-nav .nav-link.active:hover',
    ),
    'property' => 'color',
  ),
) );

// Custom dropdown menu background color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_dropdown_background_color',
  'label'       => __( 'Dropdown Menu Background Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#fff',
  'priority'    => 100,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .dropdown-menu',
    ),
    'property' => 'background-color',
  ),
) );


// Custom dropdown item color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_downdown_item_color',
  'label'       => __( 'Dropdown Link Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#000',
  'priority'    => 105,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .dropdown-menu .dropdown-item',
    ),
    'property' => 'color',
  ),
) );

// Custom dropdown item active/hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_navbar_downdown_item_hover_color',
  'label'       => __( 'Dropdown Link Hover Color', 'bmc-theme' ),
  'section'     => 'header_navbar',
  'default'     => '#262626',
  'priority'    => 110,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .dropdown-menu .dropdown-item:focus',
      'header .dropdown-menu .dropdown-item:hover',
    ),
    'property' => 'color',
  ),
) );