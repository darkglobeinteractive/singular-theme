jQuery(document).ready(function($) {

  /* ADD FIXED CLASS TO WORDPRESS ADMIN BAR FOR MMENU COMPATIBILITY */
  $('#wpadminbar').addClass('Fixed');


  /* MOBILE NAVIGATION ------------------------------------------ */
  $('#navigation > ul.menu').each(function() {
    var $skip_content = $('a.skip-main').detach();
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
    /* Use this if the menu trigger $('#mm-trigger') is in a fixed location and won't close the menu
    var api = $('#mobile-menu').data('mmenu');
    $('#mm-trigger').click(function() {
      api.close();
    });
    */
    $('body').prepend($skip_content);
  });


  /* SLICK SLIDER ----------------------------------------------- */
  /* Un-comment the slick items in functions.php
  $('.slick-slider').slick();
  */


  /* SMOOTH SCROLLING ------------------------------------------- */
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}});

});
