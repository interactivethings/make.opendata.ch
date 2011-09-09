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
    
    /* LOAD VIDEO
    /////////////////////////////////////////////////////////////////*/
    /*$('div.video img').click(function() {
        getVideo($(this).attr("id"));
    });*/
    
  });
}).call(this);

function getVideo(videoId) {
    $.ajax({
        type: "GET",
        url: "../scripts/video.php",
        data: "id=" + videoId,
        success: function(code) {
            showVideo(videoId, code);
        }
    });
}

function showVideo(videoId, code) {
    $('#' + videoId).parent('div.video').html(code);
}