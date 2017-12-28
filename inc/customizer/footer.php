<?php

/*
 *	Add the Footer section
 */
bmc_theme_Kirki::add_section( 'footer', array(
  'title'          => __( 'Footer' ),
  'description'    => __( 'Customize the page footer here' ),
  'priority'       => 70,
  'capability'     => 'edit_theme_options'
) );

// Optional custom spacing
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_spacing',
  'label'       => __( 'Enable Custom Spacing', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => false,
  'priority'    => 10,
) );

// Footer padding-y
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_padding_y',
  'label'       => __( 'Footer Top and Bottom Padding', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '1.5rem',
  'priority'    => 15,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.footer-top',
      'property' => 'padding-top',
    ),
    array(
      'element'  => '.footer-top',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Custom home-link/contact-info margin
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_home_contact_margin',
  'label'       => __( 'Home Link and Contact Info List Margin', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '2rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info',
      'property' => 'margin-top',
    ),
  ),
) );

// Custom contact-info list item right margin
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_contact_item_right_margin',
  'label'       => __( 'Contact Item Right Margin', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '0.5rem',
  'priority'    => 25,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info .list-inline-item:not(:last-child)',
      'property' => 'margin-right',
    ),
  ),
) );

// Custom contact-info list item bottom margin
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_contact_item_bottom_margin',
  'label'       => __( 'Contact Item Bottom Margin', 'bmc-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '1rem',
  'priority'    => 30,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info li',
      'property' => 'margin-bottom',
    ),
  ),
) );


// Optional custom typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_typography',
  'label'       => __( 'Enable Custom Typography', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => false,
  'priority'    => 40,
) );

// Custom home-link typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'footer_home_link_typography',
  'label'       => __( 'Home Link Typography', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => '300',
    'font-size'      => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
  ),
  'priority'    => 45,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_typography',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .home-link span'
    ),
  ),
) );

// Custom contact-info list item typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'footer_contact_item_typography',
  'label'       => __( 'Contact Item Typography', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => '300',
    'font-size'      => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
  ),
  'priority'    => 50,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_typography',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .contact-info li'
    ),
  ),
) );


// Optional custom colors
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_colors',
  'label'       => __( 'Enable Custom Colors', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => false,
  'priority'    => 60,
) );

// Custom footer background color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_background_color',
  'label'       => __( 'Footer Background Color', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => '#343a40',
  'priority'    => 65,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer',
    ),
    'property' => 'background-color',
  ),
) );

// Custom footer link color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_link_color',
  'label'       => __( 'Link Color', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => '#fff',
  'priority'    => 70,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.footer-top a',
    ),
    'property' => 'color',
  ),
) );

// Custom footer link hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'header_text_hover_color',
  'label'       => __( 'Link Hover Color', 'bmc-theme' ),
  'section'     => 'footer',
  'default'     => '#fff',
  'priority'    => 75,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.footer-top a:hover',
    ),
    'property' => 'color',
  ),
) );