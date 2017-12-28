
/*
 Tribe events tooltip
 */

if (typeof window.tribe_ev !== 'undefined') {
  window.tribe_ev.fn.tooltips = function () {
    custom_tooltip();
  };
}

function custom_tooltip() {
  var $container = $(document.getElementById('tribe-events'));
  var $body = $('body');
  var is_shortcode = $container.hasClass('tribe-events-shortcode');
  var is_month_view = $container.hasClass('view-month') || $body.hasClass('events-gridview');
  var is_week_view = $container.hasClass('view-week') || $body.hasClass('tribe-events-week');
  var is_photo_view = $container.hasClass('view-photo') || $body.hasClass('tribe-events-photo');
  var is_day_view = $container.hasClass('view-day') || $body.hasClass('tribe-events-day');
  var is_list_view = $container.hasClass('view-list') || $body.hasClass('events-list');
  var is_map_view = $container.hasClass('view-map') || $body.hasClass('tribe-events-map');
  var is_single = $body.hasClass('single-tribe_events');

  $container.on('mouseenter', 'div[id*="tribe-events-event-"], div.event-is-recurring', function () {
    var bottomPad = 0;
    var $this = $(this);
    var $tip;

    if (is_month_view) { // Cal View Tooltips
      bottomPad = $this.find('a').outerHeight() + 18;
    } else if (is_single || is_day_view || is_list_view) { // Single/List View Recurring Tooltips
      bottomPad = $this.outerHeight() + 12;
    } else if (is_photo_view) { // Photo View
      bottomPad = $this.outerHeight() + 10;
    }

    // Widget Tooltips
    if ($this.parents('.tribe-events-calendar-widget').length) {
      bottomPad = $this.outerHeight() - 6;
    }

    if (!is_week_view || is_shortcode) {
      if (is_month_view || is_shortcode) {
        $tip = $this.find('.tribe-events-tooltip');

        if (!$tip.length) {
          var data = $this.data('tribejson');

          if (typeof data == 'string') {
            data = $.parseJSON(data);
          }

          var tooltip_template = $this.hasClass('tribe-event-featured')
            ? 'tribe_tmpl_tooltip_featured'
            : 'tribe_tmpl_tooltip';

          $this.append(tribe_tmpl(tooltip_template, data));

          $tip = $this.find('.tribe-events-tooltip');
        }

        new Popper($this, $tip, {
          placement: 'right'
        }).update();

        $tip.show();


      } else {
        // Week view
        //$this.find('.tribe-events-tooltip').css('bottom', bottomPad).show();
      }

    }

  }).on('mouseleave', 'div[id*="tribe-events-event-"], div[id*="tribe-events-daynum-"]:has(a), div.event-is-recurring', function () {

    var $tip = $(this).find('.tribe-events-tooltip');

    $tip.stop(true, false).fadeOut(200);

  });
}

