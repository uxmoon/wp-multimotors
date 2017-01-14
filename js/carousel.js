( function( $ ) {

  $(document).ready(function(){

    var $carouselHome   = $('.carousel-home'),
        $carouselSingle = $('.carousel-single'),
        $carouselAbout  = $('.carousel-about');

    $carouselHome.slick({
      autoplay: true,
      autoplaySpeed: 5000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: true
    });

    $carouselSingle.slick({
      dots: true,
      adaptiveHeight: true
    });

    $carouselAbout.slick({
      dots: false,
      arrows: false,
      autoplay: true,
      fade: true,
      speed: 1000,
    });

  });

} )( jQuery );