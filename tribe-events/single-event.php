<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single tribe-clearfix">

  <p class="tribe-events-back">
    <a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( __( 'Back to %s', 'tribe-events-calendar-pro' ), tribe_get_event_label_plural() ); ?></a>
  </p>
  
	<?php while ( have_posts() ) :  the_post(); ?>
  
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <section class="main">

        <!-- Notices -->
        <?php tribe_the_notices() ?>

        <!-- Event header -->
        <div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
          <!-- Navigation -->
          <h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
          <ul class="tribe-events-sub-nav">
            <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '%title%' ) ?></li>
            <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title%' ) ?></li>
          </ul>
          <!-- .tribe-events-sub-nav -->
        </div>
        <!-- #tribe-events-header -->

        <div class="event-header">
  
          <!-- Event featured image, but exclude link -->
          <?php if ( has_post_thumbnail() ) : ?>
              
              <span class="featured-image"
                    style="background-image: url(<?php echo tribe_event_featured_image( null, 'full', false, false ); ?>);"></span>
  
          <?php endif; ?>

          <div class="event-title" style="<?php if ( has_post_thumbnail() ) { echo 'position: absolute;'; } ?>">

            <h2 class="tribe-events-single-event-title" >
              <?php the_title() ?>
            </h2>

            <?php echo tribe_events_event_schedule_details( $event_id, '<div class="tribe-event-schedule-details">', '</div>' ); ?>
            <?php if ( tribe_get_cost() ) : ?>
              <span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
            <?php endif; ?>
          </div>
          
        </div>
        
  
        <!-- Event content -->
        <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
        <div class="tribe-events-single-event-description tribe-events-content">
          <?php the_content(); ?>
        </div>
        <!-- .tribe-events-single-event-description -->
        <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
  
        <!-- Related events-->
        <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>

        <!-- Event footer -->
        <div id="tribe-events-footer">
          <!-- Navigation -->
          <h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
          <ul class="tribe-events-sub-nav">
            <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '%title%' ) ?></li>
            <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title%' ) ?></li>
          </ul>
          <!-- .tribe-events-sub-nav -->
        </div>
        <!-- #tribe-events-footer -->

      </section>

      <aside class="sidebar">
        <!-- Event meta -->
        <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
        <?php tribe_get_template_part( 'modules/meta' ); ?>
      </aside>

    </div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>
 

</div><!-- #tribe-events-content -->
