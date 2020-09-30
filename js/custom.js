
$(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '.arrow-prev',
        nextArrow: '.arrow-next',
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        centerMode: true,
        centerPadding: '0px',
        asNavFor: '.slider-nav',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
                breakpoint: 740,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      }); 
      $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: '.multiple-items',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        infinite: false,
        swipToSlide :true,
      }); 
});
