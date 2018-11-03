(function($) {
  "use strict"; // Start of use strict

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

})(jQuery); // End of use strict

// Disable scroll zooming and bind back the click event
// Enable map zooming with mouse scroll when the user clicks the map
