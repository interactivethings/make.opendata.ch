(function() {
  $(function() {
    /* FIXED HEADER
    /////////////////////////////////////////////////////////////////*/
    $.waypoints.settings.scrollThrottle = 30;
    $('.page-header').waypoint(function(event, direction) {
      $("h1", this).toggleClass('sticky', direction === "down");
      event.stopPropagation();
    }, {
      offset: 15
    });
  });
}).call(this);
