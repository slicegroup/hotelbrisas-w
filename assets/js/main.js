wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100,
    callback: function (box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);

$('.single-banner').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  // fade: true
  // prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
});

$('.slick-room').slick({
  prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
});

$('.slick-services').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  vertical: true,
  verticalSwiping: true,
  dots: true,
  // autoplay: true,
  // autoplaySpeed: 1000
  responsive: [
    {
      breakpoint: 997,
      settings: {
        slidesToShow: 1,
        vertical: false,
        verticalSwiping: false,
        slidesToScroll: 1,
      }
    },


  ]
});

// ANIMATE
wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100,
    callback: function (box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();