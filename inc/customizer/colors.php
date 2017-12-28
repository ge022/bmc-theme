<?php

/*
 *  Add to the Colors section
 */
// Main content background color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'main_background_color',
  'label'       => __( 'Main Content Background Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#fff',
  'priority'    => 10,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'main',
    ),
    'property' => 'background-color',
  ),
) );

// Text color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'text_color',
  'label'       => __( 'Text Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 20,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'body',
    ),
    'property' => 'color',
  ),
) );

// Link color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'link_color',
  'label'       => __( 'Link Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 30,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'body a',
    ),
    'property' => 'color',
  ),
) );

// Link hover color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'link_hover_color',
  'label'       => __( 'Link Hover Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#262626',
  'priority'    => 35,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'body a:hover',
    ),
    'property' => 'color',
  ),
) );

// Heading 1 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h1_color',
  'label'       => __( 'Heading 1 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 50,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h1',
    ),
    'property' => 'color',
  ),
) );

// Heading 2 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h2_color',
  'label'       => __( 'Heading 2 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 60,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h2',
    ),
    'property' => 'color',
  ),
) );

// Heading 3 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h3_color',
  'label'       => __( 'Heading 3 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 70,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h3',
    ),
    'property' => 'color',
  ),
) );

// Heading 4 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h4_color',
  'label'       => __( 'Heading 4 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 80,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h4',
    ),
    'property' => 'color',
  ),
) );

// Heading 5 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h5_color',
  'label'       => __( 'Heading 5 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 90,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h5',
    ),
    'property' => 'color',
  ),
) );

// Heading 6 color
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'color',
  'settings'    => 'h6_color',
  'label'       => __( 'Heading 6 Color', 'bmc-theme' ),
  'section'     => 'colors',
  'default'     => '#000',
  'priority'    => 100,
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h6',
    ),
    'property' => 'color',
  ),
) );