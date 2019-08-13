jQuery(document).ready(function($) {

  /* MOBILE NAVIGATION ------------------------------------------ */
  $('#navigation > ul.menu').each(function() {
    var $mobile_menu = $(this).clone();
    $('ul', $mobile_menu).each(function() {
      $(this).attr('class','');
      $(this).attr('id','');
    });
    $('li', $mobile_menu).each(function() {
      $(this).attr('class','');
      $(this).attr('id','');
    });
    $('#page').prepend('<nav id="mobile-menu"><ul>'+$mobile_menu.html()+'</ul></div>');
    $('#mobile-menu').mmenu({
      'extensions': [
        'position-right',
      ],
      /*
      'navbar': {
        'title': ''
      }
      */
    });
  });

  /* SLICK SLIDER ----------------------------------------------- */
  /* Un-comment the slick items in functions.php
  $('.slick-slider').slick();
  */

});
