//
// $(function (){
//   $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//       $('.menu').addClass("n-scroll");
//     } else {
//       $(".menu").removeClass("n-scroll");
//     }
//   });
// });
// $(function (){
//   $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//       $('.logo-navbar').addClass("none");
//     } else {
//       $(".logo-navbar").removeClass("none");
//     }
//   });
// });
// $(function (){
//   $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//       $('.none-a').addClass("no-none");
//     } else {
//       $(".none-a").removeClass("no-none");
//     }
//   });
// });
//
$(function() {
  $('.pop-up').hide();
  $('.pop-up').fadeIn(1000);

      $('.close-button').click(function (e) {

      $('.pop-up').fadeOut(700);
      $('#overlay').removeClass('blur-in');
      $('#overlay').addClass('blur-out');
      e.stopPropagation();

    });
 });
// if (/iP(hone|od|ad)/.test(navigator.platform)) {
//   $("*").css({
//     cursor: "pointer"
//   });
// }
// $(".preloader")
//   .delay(3500)
//   .fadeOut(600);

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
        dots: true,
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


$(document).ready(function () {
  //we need to get the button
  $('.button-up').click(function () {
    $('body, html').animate({
      scrollTop: '0px'
    }, 100); //animation time in ms
  });

  //condicional para visualizar el button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('.button-up').slideDown(300);
    } else {
      $('.button-up').slideUp(300);
    }
  });
});



$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: true,
  focusOnSelect: true
});
