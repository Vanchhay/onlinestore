var PRINCECODE;
if (!PRINCECODE) PRINCECODE = {}; 
if (!PRINCECODE.main) PRINCECODE.main = {};

(function(document, window, $){

    // Annonymous function
    var func = PRINCECODE.main;

    // DOM ready
    $(document).ready(function(){
        var prevBtn = $('.slide-control.prev'),
            nextBtn = $('.slide-control.next');
        $('.features-slider .slideset').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 300,
            arrows: true,
            cssEase: 'linear',
            prevArrow: '<button class="slide-control prev"></button>',
            nextArrow: '<button class="slide-control next"></button>',
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            } 
          ]
        });

    });

})(document, window, window.jQuery);

