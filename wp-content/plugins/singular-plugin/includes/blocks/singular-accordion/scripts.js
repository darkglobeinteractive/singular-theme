jQuery(document).ready(function($) {

  // Handle each accordion
  $('.singular-accordion').each(function() {

    // Set variables
    var $accordion = $(this);

    // Handle each item in the accordion
    $('.item', $accordion).each(function() {

      // Set variables
      var $item = $(this);
      var $content = $('.content', $item);
      var $wrap = $('.wrap', $content);

      // Handle button triggers
      $('button', $item).on('click', function() {

        // If item is open, close it and set the max-height of the content to 0
        if ($item.hasClass('open')) {
          $item.removeClass('open');
          $content.css('max-height', '0');

        // Otherwise, open the item and set the max-height of the content container
        } else {
          $item.addClass('open');
          $content.css('max-height', $wrap.innerHeight()+'px');
        }

      });

    });

    // Handle window resizing
    $(window).on('resize', function() {

      // If an item is open, reset the height of the content container
      $('.item.open').each(function() {
        $('.content', this).css('max-height', $('.content .wrap', this).innerHeight()+'px');
      });

    });

  });

});
