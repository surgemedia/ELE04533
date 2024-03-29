/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

/*===================================
=            Menu Action            =
===================================*/
var menu = {
  init: function(tag){
    jQuery(tag).click(function(){
      jQuery(this).parent().siblings(".box").toggleClass("open");
      jQuery(this).toggleClass("open");

    });
  } 
};

menu.init("button.navbar");

  /*=============================================
  = Enabling multi-level navigation =
  ===============================================*/
  jQuery('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault(); 
      event.stopPropagation(); 
      jQuery(this).parent().siblings().removeClass('open');
      jQuery(this).parent().toggleClass('open');

  });

jQuery( document ).ready(function() {
   /*===================================
  =            Owl Carousel           =
  ====================================*/

  var owl = jQuery(".owl-carousel");

  owl.owlCarousel({
    
    center:true,
    items:2,
    loop:true,
    margin:0,
    dots:false,
    navText:["NEXT","PREVIOUS"],
    responsiveBaseElement:".myCustomWrapper",
    responsive:{
        0:{
            items:1,
            nav:false
        },
        900:{
            items:2,
            nav:false
        },
        1200:{
            items:2,
            nav:false
        }
    }

  });

function showTeamContent (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            jQuery(this).parents(".small-block").addClass("open");
            
          });
    

}
showTeamContent(".info-more");

function closeTeamContent (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            jQuery(this).parents(".small-block").removeClass("open");
            
          });
    

}
closeTeamContent(".info-close");

// Go to the next item
jQuery('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
jQuery('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});

function readMoreService (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            var url=jQuery(this).attr("data-url");
            var container= jQuery(this).attr("data-target");
            
            console.log("here");
            jQuery(container+" .loading").addClass("show");
            getServiceInfo(url,container);
            jQuery(this).hide();
          });
    

}
readMoreService(".read-services");


    console.log( "ready!" );

});