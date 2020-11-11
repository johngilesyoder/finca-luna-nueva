(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';
    $(document).ready(function(){
      $('.hero-backgrounds').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false
      });
    });
  });
  
})(jQuery, this);
