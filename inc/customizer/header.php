<?php

/*
 *	Add the Header section
 */
bmc_theme_Kirki::add_section( 'header', array(
  'title'          => __( 'Header' ),
  'description'    => __( 'Customize the page header here' ),
  'priority'       => 50,
  'capability'     => 'edit_theme_options'
) );

// Optional custom spacing
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_spacing',
  'label'       => __( 'Enable Custom Spacing', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 10,
) );

// Header padding-y
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_padding_y',
  'label'       => __( 'Header Top and Bottom Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header',
  'default'     => '1.5rem',
  'priority'    => 15,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.header-top',
      'property' => 'padding-top',
    ),
    array(
      'element'  => '.header-top',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Custom logo/title margin
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_logo_title_margin',
  'label'       => __( 'Logo and Title Margin', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'header',
  'default'     => '1rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.header-top .site-logo',
      'property' => 'margin-bottom',
    ),
  ),
) );

// Optional custom colors
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_colors',
  'label'       => __( 'Enable Custom Colors', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 30,
) );

// Custom header background color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_background_color',
  'label'       => __( 'Header Background Color', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => '#868e96',
  'priority'    => 35,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header',
    ),
    'property' => 'background-color',
  ),
) );

// Custom header link color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_link_color',
  'label'       => __( 'Link Color', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => '#fff',
  'priority'    => 40,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-branding a',
    ),
    'property' => 'color',
  ),
) );

// Custom header link hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_link_hover_color',
  'label'       => __( 'Link Hover Color', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => '#fff',
  'priority'    => 45,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-branding a:hover',
    ),
    'property' => 'color',
  ),
) );


// Optional header logo
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_logo',
  'label'       => __( 'Display Logo in Header', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => true,
  'priority'    => 60,
) );

// Optional custom header logo
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_logo',
  'label'       => __( 'Enable Custom Logo', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 70,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
) );

// Header logo height
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'number',
  'settings'    => 'custom_header_logo_height',
  'label'       => __( 'Header Logo Height', 'bmc-theme' ),
  'description' => __( 'Height is set in pixels. Leave blank to inherit the default height.', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => '150',
  'priority'    => 75,
  'choices'     => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'header img.custom-logo',
      'property' => 'height',
      'units'    => 'px',
    ),
  ),
) );

// Custom header logo
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'image',
  'settings'    => 'custom_header_logo',
  'label'       => __( 'Header Logo', 'bmc-theme' ),
  'description' => __( 'The default site logo must be set to override the header logo.', 'bmc-theme' ),
  'section'     => 'header',
  'priority'    => 80,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header img.custom-logo',
      'function' => 'html',
      'attr'     => 'src',
    ),
  ),
) );


// Custom header site title
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_title',
  'label'       => __( 'Enable Custom Site Title', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 90,
) );

bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_title',
  'description' => 'Title Text',
  'section'     => 'header',
  'default'     => esc_attr__('Title', 'bmc-theme'),
  'priority'    => 95,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_title',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header .site-title',
      'function' => 'html',
    ),
  ),
) );

// Custom site title typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'custom_header_site_title_typography',
  'label'       => __( 'Title Typography', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
  ),
  'priority'    => 100,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_title',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-title',
    ),
  ),
) );


// Custom header site description
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_description',
  'label'       => __( 'Enable Custom Site Description', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 110,
) );

bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_description',
  'description' => 'Description Text',
  'section'     => 'header',
  'default'     => esc_attr__('Description', 'bmc-theme'),
  'priority'    => 115,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_description',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header .site-description .description-wrapper',
      'function' => 'html',
    ),
  ),
) );

// Custom site description typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'custom_header_site_description_typography',
  'label'       => __( 'Description Typography', 'bmc-theme' ),
  'section'     => 'header',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
  ),
  'priority'    => 120,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_description',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-description .description-wrapper',
    ),
  ),
) );