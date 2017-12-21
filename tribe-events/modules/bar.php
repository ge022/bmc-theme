<?php
  /**
   * Events Navigation Bar Module Template
   * Renders our events navigation bar used across our views
   *
   * $filters and $views variables are loaded in and coming from
   * the show funcion in: lib/Bar.php
   *
   * Override this template in your own theme by creating a file at:
   *
   *     [your-theme]/tribe-events/modules/bar.php
   *
   * @package  TribeEventsCalendar
   * @version  4.3.5
   */
?>

<?php
  
  $filters = tribe_events_get_filters();
  $views = tribe_events_get_views();
  
  $current_url = tribe_events_get_current_filter_url();
?>

<?php do_action( 'tribe_events_bar_before_template' ) ?>
  <div id="tribe-events-bar">

    <form id="tribe-bar-form" class="" name="tribe-bar-form" method="post"
          action="<?php echo esc_attr( $current_url ); ?>">

      <nav class="navbar navbar-expand-lg">
        <div class="container" id="tribe-events-bar-container">

          <div id="tribe-events-navbar">

            <button class="navbar-toggler collapsed" data-target="#eventsNavbar" data-toggle="collapse" type="button">
            
              FIND EVENTS
            
              <span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </span>
            
            
            </button>

            <div id="tribe-bar-views">
              <!-- Views -->
              <?php if ( count( $views ) > 1 ) { ?>
                <div class="tribe-bar-views-inner">
                  <h3
                    class="tribe-events-visuallyhidden"><?php esc_html_e( 'Event Views Navigation', 'the-events-calendar' ) ?></h3>
                  <label><?php esc_html_e( 'View As', 'the-events-calendar' ); ?></label>
                    <select class="tribe-bar-views-select tribe-no-param tribe-events-visuallyhidden" name="tribe-bar-view">
                      <?php foreach ( $views as $view ) : ?>
                        <option <?php echo tribe_is_view( $view[ 'displaying' ] ) ? 'selected' : 'tribe-inactive' ?>
                          value="<?php echo esc_attr( $view[ 'url' ] ); ?>"
                          data-view="<?php echo esc_attr( $view[ 'displaying' ] ); ?>">
                          <?php echo $view[ 'anchor' ]; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                </div>
                <!-- .tribe-bar-views-inner -->
              <?php } // if ( count( $views ) > 1 ) ?>

            </div>
            
          </div>
          
          
          <?php if ( !empty( $filters ) ) { ?>

            <div class="navbar-collapse collapse" id="eventsNavbar">
              <div class="tribe-bar-filters">
                <div class="tribe-bar-filters-inner">
                  <?php foreach ( $filters as $filter ) : ?>
                    <div class="<?php echo esc_attr( $filter[ 'name' ] ) ?>-filter">
                      <label class="label-<?php echo esc_attr( $filter[ 'name' ] ) ?>"
                             for="<?php echo esc_attr( $filter[ 'name' ] ) ?>"><?php echo $filter[ 'caption' ] ?></label>
                      <?php echo $filter[ 'html' ] ?>
                    </div>
                  <?php endforeach; ?>
                  <div class="tribe-bar-submit">
                    <input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar"
                           value="<?php printf( esc_attr__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>"/>
                  </div>
                  <!-- .tribe-bar-submit -->
                </div>
                <!-- .tribe-bar-filters-inner -->
              </div><!-- .tribe-bar-filters -->
            </div>
          
          <?php } // if ( !empty( $filters ) ) ?>


        </div>

      </nav>

    </form>

  </div>
<?php
  do_action( 'tribe_events_bar_after_template' );
