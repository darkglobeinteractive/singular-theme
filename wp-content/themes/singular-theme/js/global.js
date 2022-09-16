jQuery(document).ready(function($) {

  /* NAVIGATION ------------------------------------------------- */
  $('#navigation > ul.menu').each(function() {

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

  /* MOBILE MENU ------------------------------------------------ */

  // Configure the mobile menu
  var mmenu = new Mmenu( '#navigation', {
    'offCanvas': {
      'position': 'right-front'
    }
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


  /* SLICK SLIDER ----------------------------------------------- */
  /* https://kenwheeler.github.io/slick/ */
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
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){

    var e = $(this.hash);

    // Determine the heights of possible elements on the page to take into consideration
    var header_height = 0; // Fixed headers need to be taken into consideration
    var wpadminbar_height = ($('#wpadminbar').length > 0 ? $('#wpadminbar').innerHeight() : 0); // Height of WordPress admin bar
    var scroll_top_padding = 20; // Extra padding

    // Calculate the final offset for scrolling by removing the height of the items above (and some padding) from the total offset height
    var e_offset_top = e.offset().top - (header_height + wpadminbar_height + scroll_top_padding);

  (e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({
    scrollTop:e_offset_top
  },1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}});

});
