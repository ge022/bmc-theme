<?php /* Template Name: Full Width */ ?>

<?php get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class( array( 'container-fluid', 'clearfix' ) ); ?>>
  
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile; // End of the loop.
  ?>

</main>

<?php get_footer(); ?>

