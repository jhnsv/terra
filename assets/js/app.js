jQuery(function($) {

  $('.hero-slider').slick({
    arrows: false,
    autoplay: true,
    fade: true,
  });
  
  $( "button.le-big-mac" ).click(function() {
    $('body').toggleClass('mobile-menu-active');
  });

});