<?php
/**
  * Prevent calendar export links from showing anywhere on the front-end.
  *
  * 
  */
class Tribe__Events__Remove__Export__Links {

    public function __construct() {
        add_action( 'init', array( $this, 'single_event_links' ) );
        add_action( 'init', array( $this, 'view_links' ) );
    }

    public function single_event_links() {
        remove_action(
            'tribe_events_single_event_after_the_content',
            array( $this->ical_provider(), 'single_event_links' )
        );
    }

    public function view_links() {
        remove_filter(
            'tribe_events_after_footer',
            array( $this->ical_provider(), 'maybe_add_link' )
        );
    }

    protected function ical_provider() {
        return function_exists( 'tribe' )
            ? tribe( 'tec.iCal' ) // Current
            : 'Tribe__Events__iCal'; // Legacy
    }
}

new Tribe__Events__Remove__Export__Links();