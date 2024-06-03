jQuery(document).ready(function($) {

  $('.multi-slider-block').each(function() {

    // The following gobdf_slider_modal function allows you to set heights of the modal window upon modal window opening
    function gobdf_slider_modal() {
      var container_height = $('.modaal-wrapper .modaal-container').height();
      var content_height = container_height;
  
      console.log('Container Height: '+container_height);
      console.log('Content Height: '+content_height);
  
      $('.modaal-wrapper .modaal-container .slider-modal-info').css({
        'height': container_height+'px'
      });
    }
  
    function initialize_modal_windows($slider) {
      $('a.wrap.modal', $slider).modaal({
        custom_class: 'multi-slider-modal-window',
        background: '#fff',
        overlay_opacity: 0.5,
        width: 650
        // after_open: gobdf_slider_modal
      });
    }

    var $container = $(this);
    var $slider_container = $('.multi-slider', $container);
    var $slider = $('.slider > .wrap', $slider_container);
    var slide_count = $('.item', $slider).length;
    var $slider_nav = $('.slider-nav', $container);
    var $nav_prev = $('.slider--prev', $slider_nav);
    var $nav_next = $('.slider--next', $slider_nav);
    
    $nav_prev.each(function() {
      $(this).on('click', function() {
        $slider.slick('slickPrev');
      });
    });
    
    $nav_next.each(function() {
      $(this).on('click', function() {
        $slider.slick('slickNext');
      });
    });
    
    $slider.on('init reInit breakpoint', function(slick) {
      
      $slider_container.addClass('show');
      var active_slides = $('.slick-active', $slider).length;
      // console.log('Slide Count: '+slide_count);
      // console.log('Active Slides: '+active_slides);

      if (active_slides < slide_count) {
        $slider_nav.addClass('show');
      } else {
        $slider_nav.removeClass('show');
      }

      if($container.hasClass('modal')) {
        initialize_modal_windows($slider);
      }
     
    });

    $slider.slick({
      dots: false,
      arrows: false,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1921,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 1441,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 961,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

  });

});