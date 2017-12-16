<?php

/*
 *  Add to the Typography section
 */
bmc_theme_Kirki::add_section( 'typography', array(
  'title'          => __( 'Typography' ),
  'description'    => __( 'Customize the typography here' ),
  'priority'       => 30,
  'capability'     => 'edit_theme_options'
) );

// Text typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'text_typography',
  'label'       => __( 'Text Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
//    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'body',
    ),
  ),
) );

// Heading 1 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h1_typography',
  'label'       => __( 'Heading 1 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h1',
    ),
  ),
) );

// Heading 2 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h2_typography',
  'label'       => __( 'Heading 2 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h2',
    ),
  ),
) );

// Heading 3 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h3_typography',
  'label'       => __( 'Heading 3 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h3',
    ),
  ),
) );

// Heading 4 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h4_typography',
  'label'       => __( 'Heading 4 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h4',
    ),
  ),
) );

// Heading 5 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h5_typography',
  'label'       => __( 'Heading 5 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h5',
    ),
  ),
) );

// Heading 6 typography
bmc_theme_Kirki::add_field( 'bmc_theme', array(
  'type'        => 'typography',
  'settings'    => 'h6_typography',
  'label'       => __( 'Heading 6 Typography', 'bmc-theme' ),
  'section'     => 'typography',
  'default'     => array(
//    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
  ),
  'priority'    => 10,
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'h6',
    ),
  ),
) );