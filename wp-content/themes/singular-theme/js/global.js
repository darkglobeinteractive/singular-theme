jQuery(document).ready(function($) {

  /* ADD FIXED CLASS TO WORDPRESS ADMIN BAR FOR MMENU COMPATIBILITY */
  $('#wpadminbar').addClass('Fixed');


  /* MOBILE NAVIGATION ------------------------------------------ */
  $('#navigation > ul.menu').each(function() {

    // Detach the skip-main link so that we can reattach it after the mobile menu is put in place
    var $skip_content = $('a.skip-main').detach();

    // Create variable for the main navigation menu
    var $menu = $(this);

    // Handle items with no-link
    $('li.no-link > a', $menu).each(function() {

      // Prevent the default functionality of the link
      $(this).on('click', function(e) {
        e.preventDefault();
      });

    });

    // Clone the main navigation
    var $mobile_menu = $(this).clone();

    // Remove all classes and ids from the ul elements in the cloned menu object
    $('ul', $mobile_menu).each(function() {
      $(this).attr('class','');
      $(this).attr('id','');
    });

    // Handle li elements in the cloned menu
    $('li', $mobile_menu).each(function() {

      // Create variable for the li
      var $li = $(this);

      // If the li has no-link, change the a to a span
      if ($li.hasClass('no-link')) {

        // Create a variable for the link
        var $a = $('> a', $li);

        // Add a span with the link text before the link
        $a.before('<span>'+$a.text()+'</span>');

        // Then deteach the link itself
        $a.detach();

      }

      // Finally remove the classes and ids from the li elements
      $li.attr('class','');
      $li.attr('id','');

    });

    // Prepend the main #page element with the cloned menu
    $('#page').prepend('<nav id="mobile-menu"><ul>'+$mobile_menu.html()+'</ul></div>');

    var mobile_menu = new Mmenu( '#mobile-menu', {
      'offCanvas': {
        'position': 'right'
      }
    });
    var mobile_menu_api = mobile_menu.API;
    $('#mm-trigger').on('click', function() {
      mobile_menu_api.open();
    });


    /* Use this if the menu trigger $('#mm-trigger') is in a fixed location and won't close the menu
    var api = $('#mobile-menu').data('mmenu');
    $('#mm-trigger').click(function() {
      api.close();
    });
    */

    // Reattach the skip-main link to the body
    $('body').prepend($skip_content);

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
    var wpadminbar_height = ($('#wpadminbar').length > 0 ? $('#wpadminbar').innerHeight() : 0);
    var scroll_top_padding = 20;

    // Calculate the final offset for scrolling by removing the height of the items above (and some padding) from the total offset height
    var e_offset_top = e.offset().top - (header_height + wpadminbar_height + scroll_top_padding);

  (e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({
    scrollTop:e_offset_top
  },1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}});

});
