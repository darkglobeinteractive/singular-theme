/*
 * jQuery throttle / debounce - v1.1 - 3/7/2010
 * http://benalman.com/projects/jquery-throttle-debounce-plugin/
 * 
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);

/* Throttle example
$(window).on('resize', $.throttle(500, function() {
    position_menu_bar();
  })
);
*/

jQuery(document).ready(function($) {

  /* NAVIGATION ------------------------------------------------- */
  $('#navigation').each(function() {

    // Create variable for container element
    var $navigation = $(this);

    // Handle no-link menu items
    $('> ul.menu', $navigation).each(function() {

      // Create variable for the main navigation menu
      var $menu = $(this);

      // Handle items with no-link
      $('li.no-link', $menu).each(function() {

        // Create variable to contain the text of the item
        var element_text = $('> a', this).text();

        $('> a', this).detach();
        $(this).removeClass('no-link').prepend('<span class="no-link">'+element_text+'</span>');

      });

    });

    // Configure the mobile menu
    var mmenu = new Mmenu( '#navigation', {
      'offCanvas': {
        'position': 'right-front'
      },
      'navbar': false,
      'navbars': [
        {
          'use': true,
          'position': 'top',
          'content': [
            'prev',
            'title',
            'close'
          ]
        }
      ]
    },{
      'offCanvas': {
        'clone': true
      }
    });

    // Utilize mmenu API to use independent mobile menu trigger
    var mmenu_api = mmenu.API;
    $('#mm-trigger').on('click', function() {
      if ($('body').hasClass('mm-wrapper--opened')) {
        mmenu_api.close();
      } else {
        mmenu_api.open();
      }
    });

  });


  /* SLICK SLIDER ----------------------------------------------- */
  /* https://kenwheeler.github.io/slick/ */
  /* https://accessible360.github.io/accessible-slick/ */
  /* Note: If autoplay is set to true, a play/pause button is added by default for accessibility reasons. You can hide this by setting useAutoplayToggleButton to false, but this creates an accessibility issue in itself. */
  /* Un-comment the slick items in functions.php
  $('.slick-slider').slick({
    arrows: true,
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    speed: 5000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });
  */


  /* SMOOTH SCROLLING ------------------------------------------- */
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href*="#modal"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){

    var e = $(this.hash);

    // Determine the heights of possible elements on the page to take into consideration
    var header_height = 0; 
    // header_height = $('#header').innerHeight(); // Fixed headers need to be taken into consideration

    var wpadminbar_height = ($('#wpadminbar').length > 0 ? $('#wpadminbar').innerHeight() : 0); // Height of WordPress admin bar
    var scroll_top_padding = 20; // Extra padding

    // Calculate the final offset for scrolling by removing the height of the items above (and some padding) from the total offset height
    var e_offset_top = e.offset().top - (header_height + wpadminbar_height + scroll_top_padding);

  (e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({
    scrollTop:e_offset_top
  },1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}});

});
