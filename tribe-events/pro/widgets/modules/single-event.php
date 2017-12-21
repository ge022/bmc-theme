<?php
  /**
   * Single Event Template for Widgets
   *
   * This template is used to render single events for both the calendar and advanced
   * list widgets, facilitating a common appearance for each as standard.
   *
   * You can override this template in your own theme by creating a file at
   * [your-theme]/tribe-events/pro/widgets/modules/single-event.php
   *
   * @version 4.4.18
   *
   * @package TribeEventsCalendarPro
   */
  
  $mini_cal_event_atts = tribe_events_get_widget_event_atts();
  
?>

<div class="tribe-mini-calendar-event event-<?php esc_attr_e( $mini_cal_event_atts['current_post'] ); ?> <?php esc_attr_e( $mini_cal_event_atts['class'] ); ?>">
  
  <div class="list-info">
    
      <a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark">
        
        <?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
        <h5 class="tribe-events-title">
          <?php the_title(); ?> |
        </h5>
        <?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>
  
        <?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>
        <div class="tribe-events-duration">
          <?php echo tribe_get_start_date( null, true, 'g:i a' ); ?>
          -
          <?php echo tribe_get_end_date( null, true, 'g:i a' ); ?>
        </div>
        <?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>

      </a>

  </div>
  
  
</div> <!-- .list-info -->