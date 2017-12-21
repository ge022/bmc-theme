<?php /* Template Name: No Header Footer */ ?>

<?php
  add_filter( 'header_enabled', '__return_false' );
  add_filter( 'footer_enabled', '__return_false' );
?>

<?php get_header(); ?>

  <main id="post-<?php the_ID(); ?>" <?php post_class( array( 'container', 'clearfix' ) ); ?>>
    
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile; // End of the loop.
    ?>

  </main>

<?php get_footer(); ?>